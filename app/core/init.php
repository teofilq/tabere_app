<?php 


require_once __DIR__ . '/../../vendor/autoload.php';

spl_autoload_register(function($classname) {
    // Sar peste clasele încărcate deja de Composer
    if (class_exists($classname, false)) {
        return;
    }

    // Incarc modelele
    $filename = "../app/models/" . ucfirst($classname) . ".php";
    if (file_exists($filename)) {
        require $filename;
    }
});


require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';

