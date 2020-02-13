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
    <link href="https://fonts.googleapis.com/css?family=Abel|Sigmar+One&display=swap" rel="stylesheet">
    <title>Redso-Perfil</title>
  </head>
  <body class="body-perfil">
  <?php include_once('navbar.php'); ?>

<div class="header-perfil">
  <br>
  
  <img src= "<?php echo $_SESSION["fotoperfil"]?>" class="foto-perfil">
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

<div class="publicacion">
    <form method="post" action="" enctype="multipart/form-data">
        <div class="publicar">Publicación</div>
        <div class="mensaje">
            <textarea name="posteo" id="posteo"></textarea>
        </div>
        <div class="botones">
            <button class="btn btn-secondary">Subir imagen</button>
            <button type="submit" class="btn btn-dark">Publicar</button>
        </div>
    </form>
</div>
    <br>

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
    <a href="perfil_amigo.php"><li><img src="img/chico.png">Amigo 1</li><hr></a>
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
