<?php

namespace App\OOP\PHP\Patterns\Singleton;

class AppSettings
{
    public static array $config;
    private static ?self $instance = null;

// to prevent create new instance
    private function __construct()
    {
        self::$config = parse_ini_file(__DIR__ . '/config.ini',true);
    }

    private function __clone()
    {

    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getConfig(string $key)
    {
        return self::$config[$key] ?? null;
    }
}