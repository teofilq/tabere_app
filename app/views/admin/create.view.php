<!doctype html>
<html lang="en" class="h-100">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tabere_app</title>
    <link href="<?=ROOT?>/css/style.css" rel="stylesheet">
    <script src="<?=ROOT?>/js/auth-check.js"></script>
</head>
<body>
<div class="cover-container">
    <header class="header">
        <h1>Adaugă o nouă tabără</h1>
    </header>

    <main class="main">
        <form action="<?=ROOT?>/dashboard/store" method="post" class="camp-form">
            <div class="form-group">
                <label for="camp_name">Nume Tabără:</label>
                <input type="text" id="camp_name" name="camp_name" required>
            </div>
            <div class="form-group">
                <label for="location">Locație:</label>
                <input type="text" id="location" name="location" required>
            </div>
            <div class="form-group">
                <label for="description">Descriere:</label>
                 <textarea id="description" name="description" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="start_date">Data Început:</label>
                <input type="date" id="start_date" name="start_date" required>
            </div>
            <div class="form-group">
                <label for="start_date">Data Finalizare:</label>
                <input type="date" id="end_date" name="end_date" require>
            </div>
            <input type="submit" value="Adaugă Tabăra" class="btn">
        </form>
    </main>

    <footer class="footer">
        <!-- ... (conținutul footer-ului) ... -->
    </footer>
</div>
</body>
</html>
