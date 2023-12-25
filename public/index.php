<!DOCTYPE html>
<html>
<head>
    <title>Login cu Imagine</title>
</head>
<body>
    <form action="log.php" method="post" enctype="multipart/form-data">
        <label for="username">Nume de utilizator:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="image">Selectează Imaginea:</label>
        <input type="file" name="image" id="image" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
