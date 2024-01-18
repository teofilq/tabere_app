<?php
$page_title = 'tabere_app - Dashboard'; 
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
            <a class="nav-link active" aria-current="page" href=href="<?=ROOT?>/dashboard" >Tabere</a>
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
      <h1 class="fw-light">Taberele noastre</h1>
      <?php if (isset($warning)): ?>
        <p class="lead text-body-secondary">Ne bucurăm că ai trimis formularul, <?=$username?>! De abia te asteptăm în echipa noastra de voluntari. Un organizator se uită acum pe formular și îl revizuiește. Te ținem la curent!</p>
        <?php else: ?>
            <p class="lead text-body-secondary">Bine ai venit, <?=$username?>! Devino voluntar și după accea te poți inscrie in orice taberă îți face cu ochiul.</p>
      <p>
        <a href="<?=ROOT?>/User/newvolunteer" class="btn btn-warning my-2">Devino Voluntar</a>
        <!-- <a href="#" class="btn btn-secondary my-2">Adaugă un anunț</a> -->
      </p>
        <?php endif; ?>

    </div>
  </div>
</section>

<div class="album py-5 bg-body-tertiary">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-3">
      <?php if (empty($camps)): ?>
        <div class="col">
          <p>Încă nu exista tabere. Aici vor apărea pe măsură ce un organizator le aduagă!</p>
        </div>
      <?php else: ?>
        <?php foreach ($camps as $camp): ?>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title><?= htmlspecialchars($camp->camp_name); ?></title>
                <rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em"><?= htmlspecialchars($camp->camp_name); ?></text>
              </svg>
              <div class="card-body">
                <h4 class="card-title"><?= htmlspecialchars($camp->camp_name); ?></h4>
                <p class="card-text">Locație: <?= htmlspecialchars($camp->location); ?></p>
                <p class="card-text">Data Început: <?= htmlspecialchars($camp->start_date); ?></p>
                <p class="card-text">Data Finalizare: <?= htmlspecialchars($camp->end_date); ?></p>
                <p class="card-text">Descriere: <?= htmlspecialchars($camp->description); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div  class="btn-group"> 
                  </div>
                  <small class="text-body-secondary"><?= $camp->created_date ?></small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</div>


</main>


<?php include(__DIR__.'/../partials/footer.php'); ?>

