<?php

namespace Services;

use Interfaces\IUserService;
use Models\User;

session_start();

class UserService implements IUserService
{
    private \PDO $_pdo;

    function __construct(\PDO $pdo)
    {
        $this->_pdo = $pdo;
    }

    public function GetAllUsers(): array
    {
        return $this->_pdo->query("SELECT * FROM users")->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function GetUserByEmail(string $email): ?User
    {
        $data = $this->_pdo->query("SELECT * FROM users WHERE `Email` = '$email'")->fetch(\PDO::FETCH_ASSOC);
        if ($data != null) {
            $user = new User();
            $user->Email = $data['Email'];
            $user->ActiveCode = $data['ActiveCode'];
            $user->Description = $data['Description'];
            $user->Name = $data['Name'];
            $user->IsAdmin = $data['IsAdmin'];
            $user->IsActive = $data['IsActive'];
            $user->Password = $data['Password'];
            $user->ProfilePath = $data['ProfilePath'];
            $user->Id = $data['Id'];
            return $user;
        } else {
            return null;
        }
    }

    public function GetUserByActiveCode(string $code): ?User
    {
        $data = $this->_pdo->query("SELECT * FROM users WHERE `ActiveCode` = '$code'")->fetch(\PDO::FETCH_ASSOC);
        if ($data != null) {
            $user = new User();
            $user->Id = $data['Id'];
            $user->Email = $data['Email'];
            $user->Name = $data['Name'];
            $user->ActiveCode = $data['ActiveCode'];
            $user->Description = $data['Description'];
            $user->IsAdmin = $data['IsAdmin'];
            $user->IsActive = $data['IsActive'];
            $user->Password = $data['Password'];
            $user->ProfilePath = $data['ProfilePath'];
            return $user;
        } else {
            return null;
        }
    }

    public function GetUserById(int $Id): ?User
    {
        $data = $this->_pdo->query("SELECT * FROM users WHERE `Id` = '$Id'")->fetch(\PDO::FETCH_ASSOC);
        if ($data != null) {
            $user = new User();
            $user->ActiveCode = $data['ActiveCode'];
            $user->Email = $data['Email'];
            $user->Name = $data['Name'];
            $user->Description = $data['Description'];
            $user->IsActive = $data['IsActive'];
            $user->IsAdmin = $data['IsAdmin'];
            $user->Password = $data['Password'];
            $user->ProfilePath = $data['ProfilePath'];
            $user->Id = $data['Id'];
            return $user;
        } else {
            return null;
        }
    }

    public function CheckUserExistByEmail(string $email): bool
    {
        $user = $this->_pdo->query("SELECT * FROM users WHERE `Email` = '$email'")->fetch(\PDO::FETCH_ASSOC);
        if ($user == null) {
            return false;
        } else {
            return true;
        }
    }

    public function AddUser(User $user): bool
    {
        if (!$this->CheckUserExistByEmail($user->Email)) {
            $password = md5($user->Password);
            $query = $this->_pdo->prepare("INSERT INTO users (`Id`, `Name`, `Email`, `Password`, `Description`, `ActiveCode`, `IsActive`, `RegisterDate`, `IsAdmin`, `ProfilePath`) VALUES (NULL, '$user->Name', '$user->Email', '$password', NULL, '$user->ActiveCode', '$user->IsActive', '$user->RegisterDate', '$user->IsAdmin', '$user->ProfilePath')");
            return $query->execute();
        } else {
            return false;
        }
    }

    public function UpdateUser(User $user): bool
    {
        $password = md5($user->Password);
        $query = $this->_pdo->prepare("UPDATE users SET (`Name` = '$user->Name', `Email` = '$user->Email', `Password` = '$password', `Description` = '$user->Description', `ActiveCode` = '$user->ActiveCode', `IsActive` = '$user->IsActive', `IsAdmin` = '$user->IsAdmin', `RegisterDate` = '$user->RegisterDate', `ProfilePath` = '$user->ProfilePath') WHERE `Id` = '$user->Id'");
        return $query->execute();
    }

    public function DeleteUser(int $id): bool
    {
        $query = $this->_pdo->prepare("DELETE * FROM users WHERE `Id` = '$id'");
        return $query->execute();
    }

    public function Login(string $email, string $password): bool
    {
        $password = md5($password);
        $user = $this->_pdo->query("SELECT * FROM users WHERE `Email` = '$email' AND `Password` = '$password'")->fetch(\PDO::FETCH_ASSOC);
        if ($user == null) {
            return false;
        } else {
            $_SESSION["email"] = $email;
            return true;
        }
    }

    public function UploadImage(): bool
    {
        $target_dir = "../Assets/Uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        return $uploadOk;
    }

    public function Logout(): bool
    {
        try {
            setcookie("email", "", time() - 86400);
            return true;
        } catch (\Exception) {
            return false;
        }
    }
}