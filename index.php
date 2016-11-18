<?php

spl_autoload_register(function ($class_name) {
    $paths = ['controllers/', 'models/', 'views/', 'routes/','core/'];
    foreach ($paths as $path) {
        if (file_exists($path . $class_name . '.php')) {
            include_once $path . $class_name . '.php';
        }
    }
});

$url = $_SERVER["REQUEST_URI"];
$route = new Web($url);