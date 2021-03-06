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
    <title>Redso-Contacto</title>
  </head>
  <body>
  <?php include_once('navbar.php'); ?>


<div class="container">
  <form id="contact-form" method="post" action="" role="form">

      <div class="messages"><h1>Contacto</h1></div>

      <div class="controls">

          <div class="row">
              <div class=" col-sm-12 col-md-6">
                  <div class="form-group">
                      <label for="form_name">Nombre *</label>
                      <input id="form_name" type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre *" required="required" data-error="Este campo es obligatorio.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                      <label for="form_lastname">Apellido *</label>
                      <input id="form_lastname" type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido *" required="required" data-error="Este campo es obligatorio.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-12 col-md-6">
                  <div class="form-group">
                      <label for="form_email">Email *</label>
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Ingrese su email *" required="required" data-error="Este campo es obligatorio.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="form_message">Mensaje *</label>
                      <textarea id="form_message" name="mensaje" class="form-control" placeholder="Escriba su mensaje *" rows="4" required="required" data-error="Escriba un pensaje."></textarea>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-12">
                  <input class="submit" type="submit" value="Enviar">
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <p class="text-muted">
                      <strong>*</strong> Campos obligatorios.
                  </p>
              </div>
          </div>
      </div>

  </form>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
