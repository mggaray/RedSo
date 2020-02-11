<?php 
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Sigmar+One&display=swap" rel="stylesheet">
    <title>Redso-Home</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">RedSo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link link-menu" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link link-menu" href="perfil.php"> Perfil <span class="sr-only">(current)</span></a>
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
      <li class="nav-item btn-logreg pull-rigth">
        <a class="nav-link link-menu " href="login.php">Login</a>
      </li>
      <li class="nav-item btn-logreg pull-rigth">
        <a class="nav-link link-menu" href="registrar.php">Registrarse</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>



<!-- Cuerpo --> 

<div class="main-index">
  <div class="sub-index">
    <p>Bienvenidos a RedSo.<br>
       Una red social donde compartir lo que quieras decir con tus amigos<br>
    </p>  

    <img src="img/redso1.jpg" alt="">

  </div>

  <div class="sub-index">
    <p>Subi tus fotos, pensamientos, ideas.<br>
      Sos libre para expresarte!
    </p> 
    <img src="img/redso2.jpg" alt="">
  </div> 


  <div class="sub-index">
    <p><a href="login.php">Logueate</a> si ya tenes cuenta<br>
    </p>
  </div>  

  <div class="sub-index">
    <p>
      <a href="registrar.php">Registrate</a> si querés unirte a la comunidad
    </p>
  </div> 


</div>

<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>RedSo</h2>
      <p class="pr-5 text-white-50">Proyecto integrador realizado para el curso Full Stack, Digital House</p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="#">Home</a></li>
          <li>- <a href="#">Login</a></li>
          <li>- <a href="#">Registrarse</a></li>
          <li>- <a href="#">Contacto</a></li>
          <li>- <a href="#">F.A.Q</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Contacto</h4>
      <p>Rosario, Argentina</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>0800-333-REDSO</p>
      <p><i class="fa fa-envelope-o mr-3"></i>info@redso.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  
  
  
  </body>
</html>
