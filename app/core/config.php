<?php 

require_once __DIR__ . '/../../vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..'); 
$dotenv->load();


define('DBNAME', $_ENV['DB_DATABASE']);
define('DBHOST', $_ENV['DB_HOST']);
define('DBUSER', $_ENV['DB_USERNAME']);
define('DBPASS', $_ENV['DB_PASSWORD']);
define('DBDRIVER', ''); 

define('ROOT', $ENV['SERVER_NAME']);
define('APP_NAME', "tabere_app");
define('APP_DESC', "O aplicație pentru organizarea taberelor");
define('DEBUG', $_ENV['APP_DEBUG']); // true - afișează erorile, false - le ascunde
//haha
//hihih

