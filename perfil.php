<?php 
session_start();
if (!isset($_SESSION['usuario'])) {

  header('Location: login.php');
}
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
    <title>Redso-Perfil</title>
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
      <li class="nav-item login">
        <a class="nav-link link-menu" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="registrar.php">Registrarse</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="faq.php">F.A.Q</a>
      </li>
      <li class="nav-item">
        <a class="nav-link link-menu" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="header-perfil">
  <br>
  <img src="img/fotoperfil.jpg" class="foto-perfil">
  <div class="info-perfil">
    <br><h1 class="nombre"><?= $_SESSION['usuario'] ?> </h1><hr>
    <ul class="info-perfil">
      <br><li>Nombre: <?= $_SESSION['nombre'] ?></li><br><hr>
      <br><li>Apellido: <?= $_SESSION['apellido'] ?></li><br><hr>
      <br><li>Ciudad: </li><br><hr>
      <br><li>Fecha de Nacimiento: dd/mm/aaaa</li>
    </ul>
  </div>
</div>
<div class="posteos">
  <h2>Posteos</h2>
<div class="post">
  <h3 class="Usuario"><?= $_SESSION['usuario'] ?></h3>
  <hr>
  <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
</div>
<div class="post">
  <h3 class="Usuario"><?= $_SESSION['usuario'] ?></h3><hr>
  <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
</div>
<div class="post">
  <h3 class="Usuario"><?= $_SESSION['usuario'] ?></h3><hr>
  <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
</div>
<div class="post">
  <h3 class="Usuario"><?= $_SESSION['usuario'] ?></h3><hr>
  <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
</div>
</div>
<div class="amigos">
  <h2 class="amigos-title"> Amigos </h2><br>
  <ul class="lista-amigos">
    <li><img src="img/chico.png">Amigo 1</li><hr>
    <li><img src="img/chico.png">Amigo 2</li><hr>
    <li><img src="img/chico.png">Amigo 3</li><hr>
    <li><img src="img/chico.png">Amigo 4</li><hr>
    <li><img src="img/chico.png">Amigo 5</li><hr>
    <li><img src="img/chico.png">Amigo 6</li><hr>
    <li><img src="img/chico.png">Amigo 7</li><hr>
    <li><img src="img/chico.png">Amigo 8</li>
  </ul>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
