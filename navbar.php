<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">RedSo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link link-menu" href="index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="perfil.php"> Perfil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="faq.php">F.A.Q</a>
      </li>
      <?php if(isset($_SESSION['usuario'])): ?>
      <li class="nav-item">
        <a class="nav-link link-menu" href="logout.php">Logout</a>
      </li> 
      <?php endif; ?>
      <?php if(!isset($_SESSION['usuario'])): ?>
      <li class="nav-item  ">
        <a class="nav-link link-menu" href="login.php"> <button class="btn-logreg">Login</button> </a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="registrar.php"> <button class="btn-logreg">Registrarse</button></a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>