<?php

// FILEPATH: /Applications/XAMPP/xamppfiles/tabere_app/config/config.php
class Config {
    // Proprietăți private pentru detalii de conexiune
    private $dbHost = 'localhost';
    private $dbUser = 'username';
    private $dbPass = 'password';
    private $dbName = 'database_name';

    // Alte setări
    private $appMode = 'development';

    // Metoda pentru a obține detalii de conectare la baza de date
    public function getDbConnection() {
        return [
            'host' => $this->dbHost,
            'username' => $this->dbUser,
            'password' => $this->dbPass,
            'name' => $this->dbName
        ];
    }

    public function getAppMode() {
        return $this->appMode;
    }

    // Alte metode pentru alte setări, dacă este necesar
    // ...
}

?>
