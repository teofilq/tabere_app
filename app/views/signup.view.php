<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account · Your Site</title>
    <link href="<?=ROOT?>/css/style.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
    
<main class="form-signin">
    <form method="post">
        <?php if(!empty($errors)):?>
            <div class="alert alert-danger">
                <?= implode("<br>", $errors)?>
            </div>
        <?php endif;?>

        <h1 class="h3 mb-3 fw-normal">Create account</h1>

        <div class="form-floating">
            <input name="first_name" type="text" class="form-control" id="floatingFirstName" placeholder="First Name" required>
            <label for="floatingFirstName">First Name</label>
        </div>
        <div class="form-floating">
            <input name="last_name" type="text" class="form-control" id="floatingLastName" placeholder="Last Name" required>
            <label for="floatingLastName">Last Name</label>
        </div>
        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input name="terms" type="checkbox" value="1" required> Accept terms
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Create</button>
        <a href="<?=ROOT?>">Home</a>
        <a href="<?=ROOT?>/login">Login</a>
    </form>
</main>

</body>
</html>
