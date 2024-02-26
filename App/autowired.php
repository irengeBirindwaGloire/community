<?php
spl_autoload_register(function ($class_name) {
    $className = str_replace("\\", "/", $class_name);
    include  "App/" . $className . '.php';
});
