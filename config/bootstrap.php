<?php
// FILEPATH: /Applications/XAMPP/xamppfiles/tabere_app/config/bootstrap.php

// Define constants
define('APP_PATH', '/path/to/your/application');

// Autoload classes
spl_autoload_register(function ($className) {
    $classFile = APP_PATH . '/classes/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

// Start session
session_start();

// Set error reporting level
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load configuration
$configFile = APP_PATH . '/config/config.php';
if (file_exists($configFile)) {
    require_once $configFile;
}

// Connect to database
$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'password',
    'database' => 'my_database'
];
$db = new PDO('mysql:host=' . $dbConfig['host'] . ';dbname=' . $dbConfig['database'], $dbConfig['username'], $dbConfig['password']);

// Additional initialization code...

?>
