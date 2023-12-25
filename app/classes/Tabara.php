
<?php
class Tabara {
    private $conn;

    private $table_name = "tabere";

    // Proprietățile clasei Tabara
    public $id_tabara;
    public $nume_tabara;
    public $locatie;
    public $descriere;
    public $data_inceput;
    public $data_sfarsit;
    public $id_organizator;

    // Constructor cu conexiunea la DB
    public function __construct($db) {
        $this->conn = $db;
    }

    // Crează o nouă tabără
    public function createTabara() {
        $query = "INSERT INTO " . $this->table_name . " 
                  (nume_tabara, locatie, descriere, data_inceput, data_sfarsit, id_organizator) 
                  VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($query);

        // Sanitize și bind
        $stmt->bind_param("sssssi", $this->nume_tabara, $this->locatie, $this->descriere, 
                          $this->data_inceput, $this->data_sfarsit, $this->id_organizator);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Citește o tabără specifică
    public function readTabara() {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id_tabara = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("i", $this->id_tabara);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            // Setează proprietățile
            $this->nume_tabara = $row['nume_tabara'];
            $this->locatie = $row['locatie'];
            $this->descriere = $row['descriere'];
            $this->data_inceput = $row['data_inceput'];
            $this->data_sfarsit = $row['data_sfarsit'];
            $this->id_organizator = $row['id_organizator'];
        }
    }

    // Actualizează o tabără
    public function updateTabara() {
        $query = "UPDATE " . $this->table_name . " 
                  SET nume_tabara = ?, locatie = ?, descriere = ?, data_inceput = ?, data_sfarsit = ?, id_organizator = ? 
                  WHERE id_tabara = ?";

        $stmt = $this->conn->prepare($query);

        // Sanitize și bind
        $stmt->bind_param("ssssssi", $this->nume_tabara, $this->locatie, $this->descriere, 
                          $this->data_inceput, $this->data_sfarsit, $this->id_organizator, $this->id_tabara);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Șterge o tabără
    public function deleteTabara() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_tabara = ?";

        $stmt = $this->conn->prepare($query);

        $stmt->bind_param("i", $this->id_tabara);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}

?>
