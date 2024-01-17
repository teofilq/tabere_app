<?php
$page_title = 'tabere_app - Home'; 
include(ROOT.'../app/views/partials/header.php'); 
include(ROOT.'../app/views/partials/navbar.php'); 
?>

<main>
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <!--cand va exista o galerie -->
      <!-- <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Amintiri Prețioase.</h1>
            <p class="opacity-75">Răsfoiește galeria noastră de tabere finalizate și lasă-te inspirat de experiențele memorabile. Vezi momente de bucurie, de explorare și de creativitate capturate în timpul taberelor noastre anterioare.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Vezi galeria</a></p>
          </div>
        </div>
      </div> -->
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Adu taberele la tine acasă</h1>
            <p class="opacity-75">Fie că ești părinte, învățător sau profesor și ai o idee spontană, noi te ajutăm să o pui in practică.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Contactează-ne</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Devino Voluntar</h1>
            <p>Înregistrează-te și află cum poti deveni voluntar.</p>
            <p><a class="btn btn-lg btn-warning" href="<?=ROOT?>/signup">Înregistrează-te</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Provocarile actuale</h1>
            <p> Prin taberele și programele noastre, ne dedicăm să îi aducem pe tineri și pe copii mai aproape de natura, încurajându-i să descopere frumusețea, misterul și lecțiile valoroase. Într-o epocă dominată de ecrane digitale, există o generație de copii care riscă să piardă joaca și să se piardă în jocul vieții.</p>
            <!-- <p><a class="btn btn-lg btn-primary" href="#featurette-divider">Vezi Tabere</a></p> -->
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing" id ="container marketing">
    <div class="row">
    <!-- Three columns of text below the carousel -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?=ROOT?>/images/inscriere.png" role="img" aria-label="Placeholder">
      <h2 class="fw-normal">Participanți</h2>
      <p>Descoperă tabere și aventurile pe care le pregătim și cum poți participa.</p>
      <p><a class="btn btn-secondary" href="<?=ROOT?>/home/learnmore">View details &raquo;</a></p>
    </div> 
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?=ROOT?>/images/voluntari.png" role="img" aria-label="Placeholder">
      <h2 class="fw-normal">Voluntari</h2>
      <p>Află mai multe despre voluntarii noștrii și pregătirea lor.</p>
      <p><a class="btn btn-secondary" href="<?=ROOT?>/home/learnmore">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="<?=ROOT?>/images/org.png" role="img" aria-label="Placeholder">
      <h2 class="fw-normal">Organizatori</h2>
      <p>Fă cunoștință cu organizatorii și modul de planificare al taberelor.</p>
      <p><a class="btn btn-secondary" href="<?=ROOT?>/home/learnmore">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->

    <!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider" id = "featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Taberele de zi. <span class="text-body-secondary">Ideea ta, aventura lor. </span></h2>
        <p class="lead">Dacă dorești să organizezi o tabără în zona ta fără a intra în detalii complicate de planificare, taberele de zi sunt soluția perfectă. Participanții se bucură de activități și distracție în timpul zilei, iar seara se întorc confortabil acasă.</p>
      </div>
      <div class="col-md-5">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg> -->
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?=ROOT?>/images/daycamp.png" alt="Placeholder: 500x500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Taberele în natura. <span class="text-body-secondary">În jurul focului de tabără.</span></h2>
        <p class="lead">Ooferă o pauză de la viața urbană agitată, permițându-ți să te relaxezi și să te deconectezi. În tabere, poți participa la diverse activități cum ar fi drumețiile, pescuitul, canotajul, sau doar să stai în jurul unui foc de tabără, povestind și cântând. Este, de asemenea, o oportunitate excelentă pentru a învăța despre supraviețuire în natură, despre flora și fauna locală și pentru a construi legături puternice cu ceilalți participanți.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?=ROOT?>/images/mooncamp.png" alt="Placeholder: 500x500">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg> -->
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Taberele tematice. <span class="text-body-secondary">Explorează. Învață. Creează. </span></h2>
        <p class="lead">Taberele tematice sunt o formă specializată și captivantă de tabără, proiectate pentru a oferi participanților o experiență unică și îmbogățitoare. Aceste tabere se concentrează pe un anumit subiect sau activitate, cum ar fi arta, știința, muzica, teatrul, sportul, sau tehnologia, oferind participanților posibilitatea de a-și dezvolta abilitățile și pasiunile într-un mediu distractiv și stimulativ.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="<?=ROOT?>/images/tematic.png" alt="Placeholder: 500x500">
        <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text></svg> -->
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
</main>

<?php include(ROOT.'../app/views/partials/footer.php'); ?>

