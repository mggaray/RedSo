window.onload = function(){
    let nombre = document.getElementById('nombre');
    let apellido = document.getElementById('apellido');
    let email = document.getElementById('email');
    let usuario = document.getElementById('usuario');
    let password = document.getElementById('password');
    let confirmarPassword = document.getElementById('password-confirm');
    let cumpleanios = document.getElementById('cumpleanios');
<<<<<<< HEAD
    // console.log(nombre);
    // console.log(apellido);
    // console.log(email);
    // console.log(usuario);
    // console.log(password);
    // console.log(confirmarPassword);
    // console.log(cumpleanios.value);

    // let passwordValido = false;
    // let emailValido =false;
=======
    nombre.value = "";
    apellido.value = "";
    email.value = "";
    usuario.value = "";
    cumpleanios.value = "";
>>>>>>> master

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
    

<<<<<<< HEAD

    function estadoBoton() {
        let bandera = false;
        for (let validacion in estados) {
            if (estados[validacion] == true) {                
                bandera = true;                
=======
    function estadoBoton() {
        let bandera = false;
        for (let validacion in estados) {
            if (estados[validacion] == true) {
                bandera = true;
>>>>>>> master
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
<<<<<<< HEAD
            estados['nombre'] = false;  
=======
            estados['nombre'] = false;
>>>>>>> master
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
<<<<<<< HEAD
            estados['apellido'] = false;  
        }else{
            document.querySelector('.alertaApellido').innerHTML=" ";
            estados['apellido'] = true;            
=======
            estados['apellido'] = false;
        }else{
            document.querySelector('.alertaApellido').innerHTML=" ";
            estados['apellido'] = true;
>>>>>>> master
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
<<<<<<< HEAD
            estados['email'] = false;  
=======
            estados['email'] = false;
>>>>>>> master
        }else{
            document.querySelector('.alertaEmail').innerHTML=" ";
            estados['email'] = true;
        }
        estadoBoton();
    }

<<<<<<< HEAD

=======
>>>>>>> master
    password.oninput = function() {
        let valor = password.value.length;
        if (valor < 8 || valor == "") {
            document.querySelector('.alertaPassword').innerHTML="<small style='color:red;'><b>La contraseña debe tener al menos 8 caracteres</b></small>";
<<<<<<< HEAD
            estados['password'] = false;  
=======
            estados['password'] = false;
>>>>>>> master
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
<<<<<<< HEAD
        estadoBoton();    
=======
        estadoBoton();
>>>>>>> master
    }

    cumpleanios.onchange = function() {
        let valor = cumpleanios.value;
        console.log(valor);
        
            if (!valor) {
            document.querySelector('.alertaCumpleanios').innerHTML="<small style='color:red;'><b>Complete el cumpleaños</b></small>";
<<<<<<< HEAD
            estados['cumpleanios'] = false;        }
        else{
            document.querySelector('.alertaCumpleanios').innerHTML=" ";
            estados['cumpleanios'] = true;            
=======
            estados['cumpleanios'] = false;
        }
        else{
            document.querySelector('.alertaCumpleanios').innerHTML=" ";
            estados['cumpleanios'] = true;
>>>>>>> master
        }
        estadoBoton();
    }

    let formulario = document.querySelector('.registro');
<<<<<<< HEAD
    
    
=======

>>>>>>> master
    formulario.onsubmit = function () {

        if (!estadoBoton()) {
            event.preventDefault();
        }
    }
}