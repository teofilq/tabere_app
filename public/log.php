<?php
$host = "localhost";
$dbUsername = "root"; 
$dbPassword = "";    
$dbname = "test";


$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {
    $username = $_POST['username'];
    $filename = $_FILES['image']['tmp_name'];

    $hash = hash_file('md5', $filename);
    echo "Hash-ul imaginii este: " . $hash . "<br>";

    $sql = "SELECT * FROM user_images WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if ($row["image_hash"] === $hash) {
            echo "utilizatorul exista";
        } else {
            echo "parolă greșită";
        }
    } else {
        echo "utilizator greșit";
    }
    
    $stmt->close();
    $conn->close();
    
}
?>
