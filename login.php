<?php 
session_start();
?>

<?php 
include_once('funciones.php'); 
if ($_POST) {
  if(verificarLogin($_POST)) {
    if(isset($_POST["recuerdame"])) {
      if($_POST["recuerdame"]=="SI") {
        setcookie('usuario',$_POST["usuario"],time()+60*60*24*7); 
        setcookie('pass',$_POST["pass"],time()+60*60*24*7);
      }
    }
    header('Location:perfil.php');
    exit;
  }
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
    <title>Redso-Login</title>
  </head>
  <body >
  <?php include_once('navbar.php'); ?>


<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="">
      <label for="ususuario" style="color:black">Usuario</label>
      <input type="text" placeholder="Ingrese su usuario" name="usuario" id="usuario" value="<?php echo isset($_COOKIE["usuario"])?$_COOKIE["usuario"]:"" ?>"/>
      <label for="pass" style="color:black">Contraseña</label>
      <input type="password" placeholder="Ingrese su contraseña" name="pass" id="pass" value="<?php echo isset($_COOKIE["pass"])?$_COOKIE["pass"]:"" ?>"/>
      <div class="recuerdame">
          <input type="checkbox" name="recuerdame"style="display:inline;" value="SI" >
          <label for="recuerdame" style="color:black;display:inline">Recuerdame</label>
      </div>
      <button>Entrar</button>
      <p class="message">¿No está registrado? <a href="registrar.html">Crear una cuenta</a></p>
    </form>
  </div>
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
