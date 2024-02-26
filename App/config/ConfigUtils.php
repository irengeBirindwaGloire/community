<?php

namespace config;

use config\Http;
use Exception;

class ConfigUtils
{
    private static $token;

    public static function tokenCrf()
    {
        self::$token = bin2hex(uniqid(random_bytes(10)));
        return self::$token;
    }

    public static function verifyToken()
    {
        if (!$_SESSION['authenticated']) {
            Http::redirect('home');
        }
    }

    public static function postMapping(): bool
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_SERVER['REQUEST_METHOD'] == 'POST')) {
            return true;
        }
        return false;
    }

    public static function getMapping(): bool
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_SERVER['REQUEST_METHOD'] == 'GET')) {
            extract($_GET);
            return true;
        }
        return false;
    }

    public static function message(string $message, string $type)
    {
        $_SESSION['message'] = "
            <div class='alert alert-" . $type . " alert-dismissible mb-2'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h5><i class='icon fa fa-info'></i> Message " . $type . "</h5>
                <p>" . $message . "</p>
            </div>";
    }
}
