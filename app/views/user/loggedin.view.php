<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tabere_app</title>
    <link href="<?=ROOT?>/css/style.css" rel="stylesheet">
</head>
<body>

<div class="cover-container">
    <header>
        <h3>Tabere_app</h3>
        <nav class="nav-masthead">
            <a class="nav-link active" aria-current="page" href="<?=ROOT?>">Home</a>
            <a class="nav-link" href="<?=ROOT?>/user/newvolunteer">Devino voluntar</a>
            <a class="nav-link" href="<?=ROOT?>/logout">Logout</a>
        </nav>
    </header>

    <main>
        <h1>Hai cu noi în tabere, <?=$username?>!!?</h1>
        <p class="lead">Pregătește-ți profilul voluntar, aplică și alege din taberele noastre.</p>
        <section class="camp-list">
            <h3>Taberele noastre</h3>
            <?php foreach ($camps as $camp): ?>
                <div class="camp-card">
                    <h4><?= htmlspecialchars($camp->camp_name); ?></h4>
                    <p>Locație: <?= htmlspecialchars($camp->location); ?></p>
                    <p>Data Început: <?= htmlspecialchars($camp->start_date); ?></p>
                    <p>Descriere: <?= htmlspecialchars($camp->description); ?></p>
                </div>
            <?php endforeach; ?>
        </section>
        <p>
        <a href="<?=ROOT?>/home/learnmore" class="btn">Află mai multe</a>
        </p>
    </main>

    <footer class="footer"></footer>
</body>
</html>
