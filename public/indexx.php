<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista Taberelor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Tabere Disponibile</h1>
            <nav>
                <a href="register.php" class="button">Înregistrare</a>
                <a href="login.php" class="button">Logare</a>
            </nav>
        </header>

        <main>
            <div class="tabere-list">
                <?php
                include_once 'classes/Database.php';
                include_once 'classes/Tabara.php';

                $database = new Database();
                $db = $database->getConnection();

                $tabara = new Tabara($db);
                $lista_tabere = $tabara->getAllTabere(); // Presupunând că ai această metodă

                if (count($lista_tabere) > 0):
                    foreach ($lista_tabere as $tabara):
                        echo "<div class='tabara-item'>";
                        echo "<h2>" . htmlspecialchars($tabara['nume_tabara']) . "</h2>";
                        echo "<p>Locație: " . htmlspecialchars($tabara['locatie']) . "</p>";
                        // Alte detalii despre tabără
                        echo "</div>";
                    endforeach;
                else:
                    echo "<p>Nu există tabere până acum.</p>";
                endif;
                ?>
            </div>
        </main>
    </div>
</body>
</html>
