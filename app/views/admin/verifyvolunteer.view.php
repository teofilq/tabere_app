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
            <a class="nav-link" href="<?=ROOT?>/dashboard/">Tabere</a>
            <a class="nav-link active" aria-current="page" href="<?=ROOT?>/dashboard/verifyvolunteer">Cereri voluntari</a>
            <a class="nav-link" href="<?=ROOT?>/logout">Logout</a>
        </nav>
    </header>

    <main class="main">
        <section class="admin-intro">
            <h2>Grijă la intruși, <?=$username?>!</h2>
            <p>Aici ai toate cererile de voluntariat</p>
        </section>
        <section class="camp-list">
            <h3>Cereri Voluntari</h3>
            <?php 
            
            foreach ($volunteers as $volunteer): ?>
                <div class="camp-card">
                    <h4>Nume: <?= htmlspecialchars($volunteer->last_name); ?> <?= htmlspecialchars($volunteer->first_name); ?></h4>
                    <p>Email: <?= htmlspecialchars($volunteer->email); ?></p>
                    <p>Număr de Telefon: <?= htmlspecialchars($volunteer->phone);?></p>
                    <p>Data nașterii: <?= htmlspecialchars($volunteer->birth_date);?></p>
                    <h4>CV voluntar</h4>
                    <p>Experință: <?= htmlspecialchars($volunteer->experience); ?></p>
                    <p>Motivația: <?= htmlspecialchars($volunteer->motivation); ?></p>
                    <p>Educație: <?= htmlspecialchars($volunteer->motivation); ?></p>
                    <p>Probleme medicale: <?= htmlspecialchars($volunteer->medical_issues ?? '-'); ?></p>
                    <p>Limbi străine: <?= htmlspecialchars($volunteer->languages_spoken ?? '-'); ?></p>

                    <p>CV trimis la data: <?= htmlspecialchars($volunteer->requested_at); ?></p>
                    <div class="actions">
                        <a href="<?=ROOT?>/dashboard/downloadcv/<?= $volunteer->volunteer_profile_id; ?>" class="btn">Descarcă CV</a>
                        <a href="<?=ROOT?>/dashboard/acceptvolunteer/<?= $volunteer->volunteer_profile_id; ?>" class="btn" onclick="return confirm('Accepți voluntarul?');">Acceptă</a>
                        <a href="<?=ROOT?>/dashboard/refuse/<?= $volunteer->volunteer_profile_id; ?>" class="btn" onclick="return confirm('Respingi voluntarul?');">Respinge</a>

                    </div>
                </div>
            <?php endforeach; ?>
        </section>
    </main>

    <footer class="footer">
        <!-- ... (conținutul footer-ului, poți adăuga un mesaj pentru admini) ... -->
        <p>© 2024 Tabere_App. Toate drepturile rezervate pentru admini.</p>
    </footer>
</div>
</body>
</html>
