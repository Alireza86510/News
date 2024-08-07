<?php

namespace Core;

class Email
{
    public static function Send(string $to, string $subject, string $message): bool
    {
        return mail($to, $subject, $message);
    }
}