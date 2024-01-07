<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>tabere_app</title>

    <!-- Bootstrap core CSS -->
<link href="<?=ROOT?>/css/style.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?=ROOT?>/css/style.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">Cover</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="<?=ROOT?>">Home</a>
        <a class="nav-link" href="<?=ROOT?>/login">Login</a>
        <a class="nav-link" href="<?=ROOT?>/images/blurr.pgn">Buna</a>

        <a class="nav-link" href="<?=ROOT?>/logout">Logout</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>Hai cu noi în tabere, <?=$username?></h1>
    <p class="lead">

    <!-- În home.view.php -->
<p>Username: <?php echo htmlspecialchars($username); ?></p>
<p>First Name: <?php echo htmlspecialchars($first_name); ?></p>
<p>Role: <?php echo htmlspecialchars($role); ?></p>
<p>Session Token: 
    <?php 
    if(isset($_COOKIE['my_app_token'])) {
        echo htmlspecialchars($_COOKIE['my_app_token']);
    } else {
        echo "Cookie-ul 'my_app_token' nu este setat.";
    }
    ?>
</p>

    Aici vei găsi cele mai bune tabere pentru copii, tabere de vară, tabere de iarnă, tabere de schi, tabere de sport, tabere de aventură, tabere de limbi străine, tabere de artă,
     tabere de muzică, tabere de dans, tabere de actorie, tabere de robotică, tabere de programare, tabere de matematică, tabere de știință, tabere de astronomie, tabere de geografie, 
     tabere de istorie, tabere de religie, tabere de psihologie, tabere de dezvoltare personală, tabere de dezvoltare emoțională, tabere de dezvoltare socială, tabere de dezvoltare spirituală, 
     tabere de dezvoltare intelectuală, tabere de dezvoltare fizică, tabere de dezvoltare cognitivă, tabere de dezvoltare morală, tabere de dezvoltare motrică, tabere de dezvoltare senzorială, 
     tabere de dezvoltare lingvistică, tabere de dezvoltare a limbajului, tabere de dezvoltare a gândirii, tabere de dezvoltare a memoriei, tabere de dezvoltare a atenției, 
     tabere de dezvoltare a creativității, tabere.
    </p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
   
  </body>
</html>
