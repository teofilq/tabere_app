<?php 
$token = bin2hex(random_bytes(32));  // Generează un token sigur
setcookie('my_app_token', $token, [
    //'expires' => time() + 86400,  // Expiră în timp curent + 86400 secunde (1 zi)
    //'secure' => true,  // Trimite cookie-ul doar peste HTTPS
    //'httponly' => true,  // Inaccesibil pentru scripturile de pe partea clientului
    'samesite' => 'Strict'  // Restricționează trimiterea cookie-urilor la cereri cross-site
]);

session_start();

require "../app/core/init.php";

if (DEBUG) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
}

$app = new App;
$app->loadController();
