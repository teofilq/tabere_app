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
        <h1>Devino voluntar</h1>
    </header>

    <main class="main">
    <h3>Ești gata,  <?=$username?>? Pregătește-te să devi voluntar și completează formularul cu simțul răspunderii. </h3>
        <form action="<?=ROOT?>/user/send" method="post" class="volunteer-form">
            <div class="form-group">
                <label for="experience">Experiență:</label>
                <textarea id="experience" name="experience" rows="4"  placeholder="Ce ai mai făcut până acum?" required></textarea>
            </div>
            <div class="form-group">
                <label for="motivation">Motivație:</label>
                <textarea id="motivation" name="motivation" rows="4" placeholder="Spune-ne ce te motivează să fi voluntar și ce pasiuni ai..." required></textarea>
            </div>
            <div class="form-group">
                <label for="education">Educație:</label>
                <textarea id="education" name="education" rows="4" placeholder="Spune-ne despre educația ta(Studii absolvite, materii care te-au fascinat, etc).." required></textarea>
            </div>
            <div class="form-group">
                <label for="education">Probleme medicale:</label>
                <textarea id="medical_issues" name="medical_issues" rows="4" placeholder="În caz de orice trebuie să știm..."></textarea>
            </div>
            <div class="form-group">
                <label for="education">Limbi vorbite:</label>
                <textarea id="languages_spoken" name="languages_spoken" rows="2" placeholder=""></textarea>
            </div>
            <input type="submit" value="Trimite CV" class="btn">
        </form>
    </main>

    <footer class="footer">
        <!-- ... (conținutul footer-ului) ... -->
    </footer>
</div>
</body>
</html>
