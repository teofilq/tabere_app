
<?php


$servername = "localhost";
$username = "root";
$password = "ttsp";
$name = "nume";

$conn = mysqli_connect($servername, $username, $password, $name);



if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nume = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $parola = filter_input(INPUT_POST, "parola", FILTER_SANITIZE_SPECIAL_CHARS);
    $parola_hash= password_hash($parola, PASSWORD_DEFAULT);

 
}

$sql = "SELECT Nume FROM login WHERE Nume= '$nume'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result))
 {
	
	$sql = "INSERT INTO login VALUES ('$nume', '$parola_hash');";
	if (mysqli_query($conn, $sql)) {
  	echo "Am adaugat un user in baza de date"."<br>";
	echo "<a href='login_page.php'>Login</a>";
	} else {
  	echo "Eroare: " . $sql . "<br>" . mysqli_error($conn);
	}


 }
 else {
            echo "Deja exista un utilizator cu acest nume"."<br>";
            echo " <a href='auth_page.php'> Incearca din nou </a>"."<br>";
            echo "<a href='login_page.php'>Login</a>";
    }


include ("footer.php");
mysqli_close($conn);

?>
</body>
</html>

