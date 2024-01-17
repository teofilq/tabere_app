<?php
$page_title = 'tabere_app - Editare Tabără'; 
include(ROOT.'../app/views/partials/header.php'); 
?>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Editeaza tabara: <?= htmlspecialchars($camp->camp_name) ?></h2>
      <p class="lead">Adu tabăra la zi.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <?php if ($camp): ?>
        <form action="<?=ROOT?>/dashboard/update/<?= $camp->camp_id; ?>" method="post" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="camp_name" class="form-label">Nume Tabără</label>
              <input type="text" class="form-control" id="camp_name" name="camp_name" value="<?= htmlspecialchars($camp->camp_name) ?>" required>
              <div class="invalid-feedback">
                Numele taberei este necesar.
              </div>
            </div>

            <div class="col-12">
              <label for="location" class="form-label">Locație</label>
              <input type="text" class="form-control" id="location" name="location" value="<?= htmlspecialchars($camp->location) ?>" required>
              <div class="invalid-feedback">
                Locația este necesară.
              </div>
            </div>

            <div class="col-12">
              <label for="start_date" class="form-label">Data Început</label>
              <input type="date" class="form-control" id="start_date" name="start_date" value="<?= $camp->start_date ?>" required>
              <div class="invalid-feedback">
                Data de început este necesară.
              </div>
            </div>

            <div class="col-12">
              <label for="end_date" class="form-label">Data Finalizare</label>
              <input type="date" class="form-control" id="end_date" name="end_date" value="<?= $camp->end_date ?>" required>
              <div class="invalid-feedback">
                Data de finalizare este necesară.
              </div>
            </div>

            <div class="col-12">
              <label for="description" class="form-label">Descriere</label>
              <textarea class="form-control" id="description" name="description" rows="4" required><?= htmlspecialchars($camp->description) ?></textarea>
              <div class="invalid-feedback">
                Descrierea este necesară.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Actualizează Tabăra</button>
        </form>
        <?php else: ?>
          <p>Tabăra specificată nu a fost găsită.</p>
        <?php endif; ?>
      </div>
    </div>
  </main>

  <?php include(ROOT.'../app/views/partials/footer.php'); ?>
</div>
