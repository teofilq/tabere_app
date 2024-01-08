<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin · Your Site</title>
    <link href="<?=ROOT?>/css/style.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/signin.css" rel="stylesheet">
</head>
<body class="text-center"->
    
<main class="form-signin">
    <form method="post">
        <?php if(!empty($errors)):?>
            <div class="alert alert-danger">
                <?= implode("<br>", $errors)?>
            </div>
        <?php endif;?>
      
        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <a href="<?=ROOT?>">Home</a>
        <a href="<?=ROOT?>/signup">Signup</a>
    </form>
</main>

</body>
</html>
