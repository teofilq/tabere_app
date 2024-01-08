<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- ... (restul tag-urilor <head> similar cu pagina home) ... -->
    <link href="<?=ROOT?>/css/style.css" rel="stylesheet">
</head>
<body>
<div class="cover-container">
    <header class="header">
        <h1>Editare Tabără</h1>
    </header>

    <main class="main">
        <?php if ($camp): ?>
        <form action="<?=ROOT?>/admin/update/<?= $camp->camp_id; ?>" method="post" class="camp-form">
        <div class="form-group">
                <label for="camp_name">Nume Tabără:</label>
                <input type="text" id="camp_name" name="camp_name" >
            </div>
            <div class="form-group">
                <label for="location">Locație:</label>
                <input type="text" id="location" name="location" >
            </div>
            <div class="form-group">
                <label for="start_date">Data Început:</label>
                <input type="date" id="start_date" name="start_date" >
            </div>
            <input type="submit" value="Actualizează Tabăra" class="btn">
        </form>
        <?php else: ?>
        <p>Tabăra specificată nu a fost găsită.</p>
        <?php endif; ?>
    </main>

    <footer class="footer">
        <!-- ... (conținutul footer-ului) ... -->
    </footer>
</div>
</body>
</html>
