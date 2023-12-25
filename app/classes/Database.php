<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

/**
 * Clasa pentru gestionarea conexiunilor la baza de date.
 */
class Database {
    /**
     * @var mysqli
     */
    private $connection;

    /**
     * Constructor pentru clasa Database.
     * Inițializează conexiunea și încarcă variabilele de mediu.
     */
    public function __construct() {
        // Încarcă variabilele de mediu
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        // Extrage detaliile conexiunii din variabilele de mediu
        $host = $_ENV['DB_HOST'];
        $database = $_ENV['DB_DATABASE'];
        $username = $_ENV['DB_USERNAME'];
        $password = $_ENV['DB_PASSWORD'];

        // Inițializează conexiunea la baza de date
        $this->connection = new mysqli($host, $username, $password, $database);

        // Verifică conexiunea
        if ($this->connection->connect_error) {
            throw new Exception("Conexiunea la baza de date a eșuat: " . $this->connection->connect_error);
        }

        $this->connection->set_charset("utf8mb4");
    }

    /**
     * Execută o interogare SQL și returnează rezultatul.
     *
     * @param string $sql
     * @return mysqli_result
     */
    public function query($sql) {
        return $this->connection->query($sql);
    }

    /**
     * Escapă string-uri pentru a preveni SQL Injection.
     *
     * @param string $value
     * @return string
     */
    public function escape($value) {
        return $this->connection->real_escape_string($value);
    }

    /**
     * Pregătește o interogare SQL și returnează un obiect statement.
     *
     * @param string $sql
     * @return mysqli_stmt
     */
    public function prepare($sql) {
        return $this->connection->prepare($sql);
    }

    /**
     * Verifică dacă conexiunea la baza de date este activă.
     *
     * @return bool
     */
    public function isConnected() {
        return $this->connection && $this->connection->ping();
    }

    /**
     * Închide conexiunea la baza de date.
     */
    public function close() {
        $this->connection->close();
    }

    /**
     * Destructor care închide conexiunea când obiectul Database nu mai este folosit.
     */
    public function __destruct() {
        $this->close();
    }
}
?>
