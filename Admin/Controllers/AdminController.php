<?php

use Services\UserService;
use Interfaces\IUserService;
use Models\User;

$userService = new UserService(new PDO("mysql:host=localhost;dbname=news_db", "root", ""));

