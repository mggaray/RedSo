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
            $_POST['usuario']="";
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

        if($unArray["pass"]!=$unArray["conpass"]){
            $errores["conpass"]="Las contraseñas no coinciden";
        }
    } 

    //valida repeticion de campos clave 

    $usuarios=file_get_contents('usuarios.json'); 
    $usuarios=explode(PHP_EOL,$usuarios); 
    foreach ($usuarios as $usuario) { 
        $usuario=json_decode($usuario,true);
        if($usuario["usuario"]==$unArray["usuario"]) {
           $errores["usuario"]="El usuario ya existe.Elija otro nombre de usuario";
        }

        if($usuario["email"]==$unArray["email"]) {
            $errores["email"]="Ya hay una cuenta registrada con ese e-mail.";
         }
    }

    return $errores;
} 

function contador(){

$contador = 1;  
    $contador += file_get_contents("contador.txt");
file_put_contents("contador.txt", $contador);
return $contador;
}

//Guardar usuario en BBDD 
function guardarUsuario($user){
    $foto= subirFotoPerfil();
    global $userid;
    $usuarioNuevo=[
    "nombre"=>$user['nombre'],
    "apellido"=>$user['apellido'],
    "email"=>$user['email'],
    "usuario"=>$user['usuario'],
    "pass"=>password_hash($user['pass'],PASSWORD_DEFAULT),
    "fotoperfil" =>$foto,
    "id" =>$userid
    ]; 

    $usuarioNuevo=json_encode($usuarioNuevo); 
    file_put_contents('usuarios.json',$usuarioNuevo . PHP_EOL, FILE_APPEND);
} 


function subirFotoPerfil() {

 if(isset($_FILES))
  {  
    global $userid;
    $mensaje="";
    if(($_FILES["fotoperfil"]["error"])==0)
     {
            $archivo= $_FILES["fotoperfil"]["tmp_name"];
            $nombre= $_FILES["fotoperfil"]["name"];
            $ext= pathinfo($nombre, PATHINFO_EXTENSION);
    
          // Verifica si la foto es muy pesada para subirla
          if ($_FILES["fotoperfil"]["size"] > 500000) 
          {
            $mensaje="Archivo muy pesado";
          }   
         // verifica la extension es jpg jpeg o png
              if($ext=="jpg" || $ext=="jpeg" || $ext=="png") 
               {
                $ext= pathinfo($nombre, PATHINFO_EXTENSION);
                $ubicacionFoto= "img/pfp/".$userid.".".$ext;
                move_uploaded_file($archivo, $ubicacionFoto);
               }
                else {$mensaje= "La foto debe ser extensión .jpg, .jpeg o .png";}        
    }

}
if ($mensaje!="")
{
return $mensaje;
} 
if (move_uploaded_file($archivo, $target_file))
  {
   $mensaje= "La Foto ". basename($archivo). " Se ha subido con exito."; 
  }
  return $ubicacionFoto;  
}
  

    

//Verifica el ingreso al login
function verificarLogin($user){
    session_start();
    $usuarios=file_get_contents('usuarios.json'); 
    $usuarios=explode(PHP_EOL,$usuarios); 
    foreach ($usuarios as $usuario) { 
        $usuario=json_decode($usuario,true);
        if($usuario["usuario"]==$user["usuario"]) {
            if(password_verify($user["pass"],$usuario["pass"])) {
                $_SESSION["nombre"]=$usuario["nombre"]; 
                $_SESSION["apellido"]=$usuario["apellido"];
                $_SESSION["email"]=$usuario["email"];
                $_SESSION["usuario"]=$usuario["usuario"];
                $_SESSION["id"]=$usuario["id"];
                $_SESSION["fotoperfil"]=$usuario["fotoperfil"];
                return true;
            }
        }
    }
}



?>