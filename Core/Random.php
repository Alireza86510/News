<?php

namespace Core;

class Random
{
    public static function Generate(): string
    {
        return date("YmdHis") . rand(10000, 99999);
    }
}