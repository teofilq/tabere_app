<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "ttsp";
$name = "nume";


$conn = mysqli_connect($servername, $username, $password, $name);

function show($conn){
	$sql = "SELECT * FROM login";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "Nume: " . $row["Nume"];
	    echo "<br>";
	}
	}
	}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nume = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $parola = filter_input(INPUT_POST, "parola", FILTER_SANITIZE_SPECIAL_CHARS);
	 $parola_hash= password_hash($parola, PASSWORD_DEFAULT);
    $_SESSION["username"]="$nume";


				}
$sql = "SELECT Parola FROM login WHERE Nume= '$nume'";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
	if (password_verify($parola, $row['Parola'])) {
            echo "Buna, " . $nume."<br>"."<br>";
	    show($conn);
	    echo "<a href='logout.php'> Log Out </a>";
	    include("footer.php");
        } else {
            echo "Ai gresit parola."."<br>";
	    echo " <a href='login_page.php'> Incearca din nou </a>";
        }
    } else {
        echo "Nu esti inregistrat!"."<br>";
	echo "<a href='auth_page.php'>Inregistreaza-te</a>";
    }


mysqli_close($conn);

?>
</body>
</html>
