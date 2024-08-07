<?php

namespace Interfaces;

use Models\User;

interface IUserService
{
    public function GetAllUsers() : array;
    public function GetUserByEmail(string $email) : ?User;
    public function GetUserByActiveCode(string $code) : ?User;
    public function GetUserById(int $Id) : ?User;
    public function CheckUserExistByEmail(string $email) : bool;
    public function AddUser(User $user) : bool;
    public function UpdateUser(User $user) : bool;
    public function DeleteUser(int $id) : bool;
    public function Login(string $email, string $password) : bool;
    public function Logout() : bool;
    public function UploadImage() : bool;
}