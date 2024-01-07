<?php 

require_once __DIR__ . '/../../vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..'); 
$dotenv->load();


define('DBNAME', $_ENV['DB_DATABASE']);
define('DBHOST', $_ENV['DB_HOST']);
define('DBUSER', $_ENV['DB_USERNAME']);
define('DBPASS', $_ENV['DB_PASSWORD']);
define('DBDRIVER', ''); 

// Setează ROOT 
if($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT', 'http://localhost/tabere_app/public');
} else {
    define('ROOT', 'https://www.tabere.go.ro');
}

define('APP_NAME', "tabere_app");
define('APP_DESC', "O aplicație pentru organizarea taberelor");
define('DEBUG', true); // true - afișează erorile, false - le ascunde


// fara .env
// 	/** database config **/
// 	define('DBNAME', 'my_db');
// 	define('DBHOST', 'localhost');
// 	define('DBUSER', 'root');
// 	define('DBPASS', '');
// 	define('DBDRIVER', '');

