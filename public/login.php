<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logare</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        
        <form action="login.php" method="post">
            <h2>Logare</h2>
            <div class="form-group">
                <label for="username">Nume utilizator:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Parolă:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Logare</button>
        </form>
    </div>
</body>
</html>
