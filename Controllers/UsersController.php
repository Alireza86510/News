<?php

require_once "../Services/Interfaces/IUserService.php";
require_once "../Services/UserService.php";
require_once "../Models/User.php";
require_once "../Core/Random.php";
require_once "../Core/Email.php";
use Services\UserService;
use Models\User;

$userService = new UserService(new PDO("mysql:host=localhost;dbname=news_db", "root", ""));

if (!empty($_POST["register"])) {
    $user = new User();
    $user->Name = $_POST["name"];
    $user->Email = $_POST["email"];
    $user->Password = $_POST["password"];
    $user->IsAdmin = false;
    $user->IsActive = false;
    $user->RegisterDate = date("Y-m-d H:i:s");
    $user->ActiveCode = \Core\Random::Generate();
    $res = $userService->AddUser($user);
    if ($res) {
        \Core\Email::Send($user->Email, "Welcome To Our Website !!!", "Please Click On The Link Below To Activate Your Account http://localhost/news/controllers/UsersController?code=".$user->ActiveCode);
        header("Location: ../Views/SuccessRegister.php");
    } else {
        header("Location: ../Views/ErrorRegister.php");
    }
}

if (!empty($_POST["login"])) {
    $user = new User();
    $res = $userService->Login($_POST["email"], $_POST["password"]);
    if ($res) {
        header("Location: ../Views/index.php");
    } else {
        header("Location: verify.php");
    }
}

if (!empty($_REQUEST["code"])) {
    $res = $userService->GetUserByActiveCode($_REQUEST["code"]);
    if ($res) {
        header("Location: ../Views/index.php");
    } else {
        header("Location: ../Views/Profile.php");
    }
}