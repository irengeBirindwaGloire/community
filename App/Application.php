<?php

use config\ConfigUtils;

session_reset();
$_SESSION['token'] = ConfigUtils::tokenCrf();

class Application
{
    public static function run()
    {
        $action = "index";
        $controllerName = "Home";

        if (!empty($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']);
        }
        if (!empty($_GET['action'])) {
            $action = $_GET['action'];
        }

        $controllerName = "controllers\\Controller" . $controllerName;
        $controller = new $controllerName();
        $controller->$action();
    }
}
