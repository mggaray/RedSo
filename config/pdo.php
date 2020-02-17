<?php

$dsn = "mysql:dbname=redso;host=127.0.0.1;port=3306";
$usuario = "root";
$pass = "asd";

try {
    $baseDeDatos = new PDO($dsn, $usuario, $pass);
    $baseDeDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Exception $e) {
    echo "<h1>Hubo un error, contacte al administrador</h1>";

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fecha = date('d/m/Y h:i:s a', time());

    $error = 'config/errores.txt';
    $archivo = fopen($error, 'a') or die('No se puede abrir el archivo:  '.$error);
    $datos = $fecha." ".$e->getMessage();
    fwrite($archivo, $datos);
    exit;
}