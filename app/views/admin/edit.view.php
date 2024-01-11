<!doctype html>
<html lang="en" class="h-100">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tabere_app</title>
    <script src="<?=ROOT?>/js/auth-check.js"></script>
    <link href="<?=ROOT?>/css/style.css" rel="stylesheet">
</head>
<body>
<div class="cover-container">
    <header class="header">
        <h1>Editare Tabără</h1>
    </header>

    <main class="main">
        <?php if ($camp): ?>
        <form action="<?=ROOT?>/dashboard/update/<?= $camp->camp_id; ?>" method="post" class="camp-form">
            <div class="form-group">
                <label for="camp_name">Nume Tabără:</label>
                <input type="text" id="camp_name" name="camp_name" value="<?= htmlspecialchars($camp->camp_name) ?>">
            </div>
            <div class="form-group">
                <label for="location">Locație:</label>
                <input type="text" id="location" name="location" value="<?= htmlspecialchars($camp->location) ?>">
            </div>
            <div class="form-group">
                <label for="start_date">Data Început:</label>
                <input type="date" id="start_date" name="start_date" value="<?= $camp->start_date ?>">
            </div>
            <div class="form-group">
                <label for="start_date">Data Finalizare:</label>
                <input type="date" id="end_date" name="end_date" value="<?= $camp->end_date ?>">
            </div>
            <div class="form-group">
                <label for="description">Descriere:</label>
                <textarea id="description" name="description" rows="4"><?= htmlspecialchars($camp->description) ?></textarea>
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
