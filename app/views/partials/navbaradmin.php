
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
            <a class="nav-link" href="<?=ROOT?>/home#container marketing">Despre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/home#featurette-divider">Tabere</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> -->
        </ul>
          <div class="text-end">

        <button type="button" class="btn btn-outline-light me-2" onclick="location.href='<?=ROOT?>/login'">Login</button>
        <button type="button" class="btn btn-warning" onclick="location.href='<?=ROOT?>/signup'">Sign-up</button>

      </div>
      </div>
    </div>
  </nav>
</header>


