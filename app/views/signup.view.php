<?php
$page_title = 'tabere_app - Signin'; 
include(ROOT.'../app/views/partials/header.php'); 
include(ROOT.'../app/views/partials/navbar.php'); 
?>

<link href="<?=ROOT?>/css/sign-in.css" rel="stylesheet">

<main class="form-signin w-100 m-auto">
  <form method="post">
  <?php if(!empty($errors)):?>
            <div class="alert alert-danger">
                <?= implode("<br>", $errors)?>
            </div>
        <?php endif;?>
    <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    <div class="form-floating">
            <input name="first_name" type="text" class="form-control" id="floatingFirstName" placeholder="First Name" required>
            <label for="floatingFirstName">First Name</label>
        </div>
    <div class="form-floating">
            <input name="last_name" type="text" class="form-control" id="floatingLastName" placeholder="Last Name" required>
            <label for="floatingLastName">Last Name</label>
        </div>
    
    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
            <input name="birth_date" type="date" class="form-control" id="floatingBirthDate" placeholder="Birth Date" required>
            <label for="floatingBirthDate">Birth Date</label>
        </div>
    <div class="form-floating">
            <input name="phone" type="tel" class="form-control" id="floatingPhone" placeholder="Phone Number" required>
            <label for="floatingPhone">Phone Number</label>
        </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

  </form>
</main>



<?php include(ROOT.'../app/views/partials/footer.php'); ?>
