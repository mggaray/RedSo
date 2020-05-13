window.onload = function(){
    let nombre = document.getElementById('nombre');
    let apellido = document.getElementById('apellido');
    let email = document.getElementById('email');
    let usuario = document.getElementById('usuario');
    let password = document.getElementById('password');
    let confirmarPassword = document.getElementById('password-confirm');
    let cumpleanios = document.getElementById('cumpleanios');
    nombre.value = "";
    apellido.value = "";
    email.value = "";
    usuario.value = "";
    cumpleanios.value = "";

    let estados = {
        nombre: false,
        apellido: false,
        email: false,
        usuario: false,
        password: false,
        confirmarPassword: false,
        cumpleanios: false
    }

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

    email.oninput = function() {
        let valor = email.value;
        let valido = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valor)
        if (!valido) {
            document.querySelector('.alertaEmail').innerHTML="<small style='color:red;'><b>Email inválido</b></small>";
            estados['email'] = false;
        }else{
            document.querySelector('.alertaEmail').innerHTML=" ";
            estados['email'] = true;
        }
        estadoBoton();
    }

    password.oninput = function() {
        let valor = password.value.length;
        if (valor < 8 || valor == "") {
            document.querySelector('.alertaPassword').innerHTML="<small style='color:red;'><b>La contraseña debe tener al menos 8 caracteres</b></small>";
            estados['password'] = false;
        }else{
            document.querySelector('.alertaPassword').innerHTML=" ";
            estados['password'] = true;
        }
        estadoBoton();
   
    }

    confirmarPassword.oninput = function() {
        let valorPassword = password.value;
        let valorConfirmar = confirmarPassword.value;
        if (valorPassword != valorConfirmar) {
            document.querySelector('.alertaConfirmarPassword').innerHTML="<small style='color:red;'><b>Las contraseñas no coinciden</b></small>";
            estados['confirmarPassword'] = false;  
        }else{
            document.querySelector('.alertaConfirmarPassword').innerHTML=" ";
            estados['confirmarPassword'] = true;
        }
        estadoBoton();
    }

    cumpleanios.onchange = function() {
        let valor = cumpleanios.value;
        console.log(valor);
        
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