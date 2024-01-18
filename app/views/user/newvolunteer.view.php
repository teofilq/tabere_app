<?php
$page_title = 'tabere_app - Adăugare Tabără'; 
include(__DIR__.'/../partials/header.php'); 
?>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Formular aplicare voluntar</h2>
      <p class="lead">După completare acesta va fi trimis către un organizator care il va revizui. Te vom contacta pe email sau telefon pentru actualizari.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <form method="post" class="needs-validation" novalidate>
          <div class="row g-3">

            <div class="col-12">
                <label for="experience" class="form-label">Experiență:</label>
                <textarea class="form-control" id="experience" name="experience" rows="6" placeholder="Ce ai mai făcut până acum?" required></textarea>
                <div class="invalid-feedback">Experiență este necesară.</div>
            </div>

            <div class="col-12">
                <label for="motivation" class="form-label">Motivație:</label>
                <textarea class="form-control" id="motivation" name="motivation" rows="6" placeholder="Spune-ne ce te motivează să fi voluntar și ce pasiuni ai..." required></textarea>
                <div class="invalid-feedback">Motivație este necesară.</div>
            </div>

            <div class="col-12">
                <label for="education" class="form-label">Educație:</label>
                <textarea class="form-control" id="education" name="education" rows="4" placeholder="Spune-ne despre educația ta(Studii absolvite, materii care te-au fascinat, etc).." required></textarea>
                <div class="invalid-feedback">Educație este necesară.</div>
            </div>

            <div class="col-12">
                <label for="medical_issues" class="form-label">Probleme medicale:</label>
                <textarea class="form-control" id="medical_issues" name="medical_issues" rows="2" placeholder="În caz de orice trebuie să știm..."></textarea>
                <div class="invalid-feedback">Informații despre probleme medicale sunt necesare.</div>
            </div>

            <div class="col-12">
                <label for="medical_issues" class="form-label">Limbi vorbite:</label>
                <textarea class="form-control" id="languages_spoken" name="languages_spoken" rows="2" placeholder=""></textarea>
                <div class="invalid-feedback">Informații despre probleme medicale sunt necesare.</div>
            </div>

    </div>
    <hr class="my-4">

<button class="w-100 btn btn-primary btn-lg" type="submit">Trimite CV</button>
</form>
</div>
</div>
</main>
</div>
  <?php include(__DIR__.'/../partials/footer.php'); ?>


