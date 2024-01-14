<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin - Tabere_App</title>
    <link href="<?=ROOT?>/css/style.css" rel="stylesheet">
    <script src="<?=ROOT?>/js/auth-check.js"></script>
</head>
<body>
<div class="cover-container">
    <header class="header">
        <h1>Dashboard Admin - Tabere</h1>
        <nav class="nav-masthead">
            <a class="nav-link active" aria-current="page" href="<?=ROOT?>/dashboard/">Tabere</a>
            <a class="nav-link" href="<?=ROOT?>/dashboard/verifyvolunteer">Cereri voluntari</a>
            <a class="nav-link" href="<?=ROOT?>/logout">Logout</a>
        </nav>
    </header>

    <main class="main">
        <section class="admin-intro">
        <h2>Spor la treabă, <?=$username?>!</h2>
            <p>Gestionează taberele și activitățile dintr-un singur loc.</p>
        </section>
        <section class="camp-list">
            <h3>Taberele Mele</h3>
            <?php foreach ($camps as $camp): ?>
                <div class="camp-card">
                    <h4><?= htmlspecialchars($camp->camp_name); ?></h4>
                    <p>Locație: <?= htmlspecialchars($camp->location); ?></p>
                    <p>Data Început: <?= htmlspecialchars($camp->start_date); ?></p>
                    <p>Data Finalizare: <?= htmlspecialchars($camp->end_date); ?></p>
                    <p>Descriere: <?= htmlspecialchars($camp->description); ?></p>
                    <div class="actions">
                        <a href="<?=ROOT?>/dashboard/edit/<?= $camp->camp_id; ?>" class="btn">Edit</a>
                        
                        <a href="<?=ROOT?>/dashboard/delete/<?= $camp->camp_id; ?>" class="btn" onclick="return confirm('Ești sigur că vrei să ștergi această tabără?');"> Delete </a>
                    </div>
                </div>
            <?php endforeach; ?>
            <a href="<?=ROOT?>/Dashboard/store" class="btn">Adaugă o nouă tabără</a>
        </section>
    </main>

    <footer class="footer">
        <!-- ... (conținutul footer-ului, poți adăuga un mesaj pentru admini) ... -->
        <p>© 2024 Tabere_App. Toate drepturile rezervate pentru admini.</p>
    </footer>
</div>
</body>
</html>
