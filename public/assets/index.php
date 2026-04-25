<?php
date_default_timezone_set('Asia/Manila');

spl_autoload_register(function($class){
    $path =[
        __DIR__ . '/../app/controllers/' . $class. '.php',
        __DIR__ . '/../app/models/' . $class. '.php',
        __DIR__ . '/../app/core/' . $class. '.php'
    ];

    foreach($path as $file) {
        if(file_exists($file)){
            require_once $file;
            return;
        }
    }
});

?>