window.onload = function(){
    let nombre = document.getElementById('nombre');
    let apellido = document.getElementById('apellido');
    let usuario = document.getElementById('usuario');
    let cumpleanios = document.getElementById('cumpleanios');
    let foto_perfil = document.getElementById('foto_perfil');
    
    
    let estados = [];

    estados['nombre'] = (nombre.value) ? true:false;
    estados['apellido'] = (apellido.value) ? true:false;
    estados['usuario'] = (usuario.value) ? true:false;
    estados['cumpleanios'] = (cumpleanios.value) ? true:false;

    let boton = document.querySelector('.enviar')
    boton.disabled = true;
    

    function estadoBoton() {
        let bandera = false;
        for (let validacion in estados) {
            if (estados[validacion] == true) {
                bandera = true;
            }
            else{
                bandera = false
                break;
            }
        }

        if (bandera == true) {
            boton.removeAttribute("disabled");
        }
        else{
            boton.disabled = true;
        }
        return bandera;
        
    }
    estadoBoton();
    
    foto_perfil.onchange = function () {
        if (!(/\.(jpe?g|png|bmp)$/i).test(foto_perfil.value) ){
            foto_perfil.value = "";
            document.querySelector('.alertaFoto').innerHTML="<small style='color:red;'><b>El archivo a adjuntar no es una imagen</b></small>";
        }else{
            document.querySelector('.alertaFoto').innerHTML=" ";
        }
        
    }

    nombre.oninput = function() {
        let valor = nombre.value;
            if (valor == "") {
            document.querySelector('.alertaNombre').innerHTML="<small style='color:red;'><b>Complete el nombre</b></small>";
            estados['nombre'] = false;
        }else{
            document.querySelector('.alertaNombre').innerHTML=" ";
            estados['nombre'] = true;
        }
        estadoBoton();
    }

    apellido.oninput = function() {
        let valor = apellido.value;
            if (valor == "") {
            document.querySelector('.alertaApellido').innerHTML="<small style='color:red;'><b>Complete el apellido</b></small>";
            estados['apellido'] = false;
        }else{
            document.querySelector('.alertaApellido').innerHTML=" ";
            estados['apellido'] = true;
        }
        estadoBoton();
    }

    usuario.oninput = function() {
        let valor = usuario.value;
            if (valor == "") {
            document.querySelector('.alertaUsuario').innerHTML="<small style='color:red;'><b>Complete el usuario</b></small>";
            estados['usuario'] = false;  
        }else{
            document.querySelector('.alertaUsuario').innerHTML=" ";
            estados['usuario'] = true;
        }
        estadoBoton();
    }

    cumpleanios.onchange = function() {
        let valor = cumpleanios.value;

            if (!valor) {
            document.querySelector('.alertaCumpleanios').innerHTML="<small style='color:red;'><b>Complete el cumpleaños</b></small>";
            estados['cumpleanios'] = false;
        }
        else{
            document.querySelector('.alertaCumpleanios').innerHTML=" ";
            estados['cumpleanios'] = true;
        }
        estadoBoton();
    }
    

    let formulario = document.querySelector('.registro');
    formulario.onsubmit = function () {

        if (!estadoBoton()) {
            event.preventDefault();
        }
    }
}