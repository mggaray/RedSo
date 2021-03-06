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
    <title>Redso-F.A.Q</title>
    
  </head>
  <body>
  <?php include_once('navbar.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
        <h1>Preguntas frecuentes<h1>
    </div>
    
  </div>
  <div class="container">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
      <div id="accordion">
        <div class="card">
          <div class="card-header pregunta">
            <a class="card-link" data-toggle="collapse" href="#collapseOne">
              <h5>Pregunta 1</h5>
            </a>
          </div>
          <div id="collapseOne" class="collapse" data-parent="#accordion">
            <div class="card-body respuesta">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header pregunta">
            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                <h5>Pregunta 2</h5>
          </a>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body respuesta">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header pregunta">
            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                <h5>Pregunta 3</h5>
            </a>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="card-body respuesta">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
        </div>
      </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
