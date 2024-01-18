<?php
$page_title = 'tabere_app - Dashboard Admin'; 
include(__DIR__.'/../partials/header.php'); 
?>

<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?=ROOT?>/home">tabere_app</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href=href="<?=ROOT?>/dashboard/">Tabere</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=ROOT?>/dashboard/verifyvolunteer">Cereri Voluntari</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Cereri Tabere</a>
          </li>
        </ul>
          <div class="text-end">
        <button type="button" class="btn btn-secondary" onclick="location.href='<?=ROOT?>/logout'">Logout</button>
      </div>
      </div>
    </div>
  </nav>
</header>

<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Grijă la intruși, <?=$username?>!</h1>
        <p class="lead text-body-secondary">Aici ai toate cererile de voluntariat</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 g-3">
        <?php foreach ($volunteers as $volunteer): ?>
          <div class="col">
            <div class="card shadow-sm">
              <div class="card-body">
                <h4 class="card-title">Nume: <?= htmlspecialchars($volunteer->last_name); ?> <?= htmlspecialchars($volunteer->first_name); ?></h4>
                <p class="card-text">Email: <?= htmlspecialchars($volunteer->email); ?></p>
                <!-- Restul detaliilor voluntarului și acțiuni -->
                <p class="card-text">Număr de Telefon: <?= htmlspecialchars($volunteer->phone); ?></p>
                <p class="card-text">Data nașterii: <?= htmlspecialchars($volunteer->birth_date); ?></p>
                <p class="card-text">Experință: <?= htmlspecialchars($volunteer->experience); ?></p>
                <p class="card-text">Motivația: <?= htmlspecialchars($volunteer->motivation); ?></p>
                <p class="card-text">Educație: <?= htmlspecialchars($volunteer->education); ?></p>
                <p class="card-text">Probleme medicale: <?= htmlspecialchars($volunteer->medical_issues ?? '-'); ?></p>
                <p class="card-text">Limbi străine: <?= htmlspecialchars($volunteer->languages_spoken ?? '-'); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div  class="btn-group">
                    <a href="<?=ROOT?>/dashboard/downloadcv/<?= $volunteer->user_id; ?>" class="btn btn-sm btn-outline-secondary">Descarcă CV</a>
                    <a href="<?=ROOT?>/dashboard/acceptvolunteer/<?= $volunteer->user_id; ?>" class="btn btn-sm btn-outline-success" onclick="return confirm('Accepți voluntarul?');">Acceptă</a>
                    <a href="<?=ROOT?>/dashboard/refuse/<?= $volunteer->user_id; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Respingi voluntarul?');">Respinge</a>
                  </div>
                  <small class="text-body-secondary"><?= htmlspecialchars($volunteer->requested_at); ?></small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</main>

<?php include(__DIR__.'/../partials/footer.php'); ?>
