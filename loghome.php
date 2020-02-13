<!DOCTYPE html>
<html lang="es">
<head>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Sigmar+One&display=swap" rel="stylesheet">
    <title>Inicio</title>
</head> 
<?php 
session_start();
if (!isset($_SESSION['usuario'])) {

    header('Location: login.php');
  }
?>

<body>
<?php include_once('navbar.php'); ?>

<div class="loghom-container"> 

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div> 

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

    <div class="posteo">
        <h3 class="Usuario">Usuario</h3>
        <hr>
        <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem neque totam ab dolorum non labore dolor, officia vitae perspiciatis quam excepturi amet! Repellat tenetur impedit accusamus necessitatibus minima. Dolor, quidem.</p>
    </div>

</div> 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>