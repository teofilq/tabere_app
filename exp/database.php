

<?php


$servername = "localhost";
$username = "root";
$password = "ttsp";
$name = "nume";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $name);

// Check connection
if ($conn){
echo "Connected"."<br>";
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nume = $_POST['username'];
    $parola = $_POST['parola'];
    $parola_hash= password_hash($parola, PASSWORD_DEFAULT);

 
    echo "Nume: " . $nume . "<br>";
    echo "Parola: " . $parola."<br>";
}
$sql = "SELECT Parola FROM login";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    if ($row['Parola'] == $parola_hash)
  }
} else {
  echo "0 results";
}


$sql = "INSERT INTO login VALUES ('$nume', '$parola_hash');";
if (mysqli_query($conn, $sql)) {
  echo "Am adaugat un user in baza de date";
} else {
  echo "Eroare: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
</body>
</html>
