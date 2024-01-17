<?php 

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..'); 
$dotenv->load();


define('DBNAME', $_ENV['DB_DATABASE']);
define('DBHOST', $_ENV['DB_HOST']);
define('DBUSER', $_ENV['DB_USERNAME']);
define('DBPASS', $_ENV['DB_PASSWORD']);
define('DBDRIVER', ''); 

define('ROOT', $_ENV['APP_ROOT']);
define('APP_NAME', "tabere_app");
define('APP_DESC', "O aplicație pentru organizarea taberelor");
define('DEBUG', $_ENV['APP_DEBUG']); // true - afișează erorile, false - le ascunde

// Configurare PHPMailer
define('GMAIL_USERNAME', $_ENV['GMAIL_USERNAME']);
define('GMAIL_PASSWORD', $_ENV['GMAIL_PASSWORD']);

