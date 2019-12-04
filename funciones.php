<?php

//Validar registro
function validarFormulario($unArray) {
    $errores=[];
    //validar nombre
    if(isset($unArray["nombre"])) {
        //validar campo no vacio
        if (empty($unArray["nombre"])) {
            $errores["nombre"]="El nombre no puede estar vacio";
        }
        //validar longitud del nombre
        if (strlen($unArray["nombre"])<2) {
            $errores["nombre"]="El nombre debe contener al menos 2 caracteres";
        } 
    }
        //validar apellido 
    if(isset($unArray["nombre"])) {
        if (empty($unArray["apellido"])) {
        $errores["apellido"]="El apellido no puede estar vacio";
        }
        //validar longitud del apellido
        if (strlen($unArray["apellido"])<2) {
        $errores["apellido"]="El apellido debe contener al menos 2 caracteres";
        } 
    }
    //validar email 
    if(isset($unArray["email"])){
        if(!filter_var($unArray["email"], FILTER_VALIDATE_EMAIL)) {
            $errores["email"]="Debe ingresar un e-mail valido";
        }
    }

    //validar usuario 
    if(isset($unArray["usuario"])) {
        if (empty($unArray["usuario"])) {
        $errores["usuario"]="El usuario no puede estar vacio";
        }
        //validar longitud del usuario
        if (strlen($unArray["usuario"])<2) {
        $errores["usuario"]="El usuario debe contener al menos 2 caracteres";
        } 
    } 

    //validar contraseña 
    if(isset($unArray["pass"])) {
        if (empty($unArray["pass"])) {
        $errores["pass"]="La contraseña no puede estar vacia";
        }
        //validar longitud de la contraseña
        if (strlen($unArray["pass"])<=6) {
        $errores["pass"]="La contraseña debe contener al menos 6 caracteres";
        } 
    } 
    return $errores;
} 

//Guardar usuario en BBDD 
function guardarUsuario($user){ 
    $usuarioNuevo=[
    "nombre"=>$user['nombre'],
    "apellido"=>$user['apellido'],
    "email"=>$user['email'],
    "usuario"=>$user['usuario'],
    "pass"=>password_hash($user['pass'],PASSWORD_DEFAULT)
    ]; 

    $usuarioNuevo=json_encode($usuarioNuevo); 
    file_put_contents('usuarios.json',$usuarioNuevo . PHP_EOL, FILE_APPEND);

}
?>