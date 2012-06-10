<?php

spl_autoload_register(function($className){
    $file = __DIR__ . '/' . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    if (file_exists($file) === true) {
        require_once $file;
    }
});