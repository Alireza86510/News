<?php

namespace Models;

class User
{
    public int $Id;
    public string $Name;
    public string $Email;
    public string $Password;
    public string $Description;
    public string $ActiveCode;
    public bool $IsActive;
    public bool $IsAdmin;
    public string $RegisterDate;
    public string $ProfilePath = "UserDefault.png";
}