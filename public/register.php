<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Înregistrare</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form-container">
        <form action="register.php" method="post">
            <h2>Înregistrare</h2>
            <div class="form-group">
                <label for="username">Nume utilizator:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Parolă:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Înregistrează-te</button>
        </form>
    </div>
</body>
</html>
