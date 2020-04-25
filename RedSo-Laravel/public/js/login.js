window.onload = function(){
    let email = document.getElementById('email');
    let password = document.getElementById('password');
    let passwordValido = false;
    let emailValido =false;
    let boton = document.querySelector('.enviar')
    boton.disabled = true;
    email.value = "";


    function estadoBoton() {
        if (passwordValido == true && emailValido == true) {
            boton.removeAttribute("disabled");

            return true;
        }
        else{
            boton.disabled = true;
            
            return false;
        }
    }

    email.oninput = function() {
        let valor = email.value;
        let valido = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valor)
        if (!valido) {
            document.querySelector('.alertaEmail').innerHTML="<small style='color:red;'><b>Email inválido</b></small>";
            emailValido = false;  
        }else{
            document.querySelector('.alertaEmail').innerHTML=" ";
            emailValido = true;
        }
        estadoBoton();
    }

    password.oninput = function() {
        let valor = password.value.length;
        if (valor < 8 || valor == "") {
            document.querySelector('.alertaPassword').innerHTML="<small style='color:red;'><b>La contraseña debe tener al menos 8 caracteres</b></small>";
            passwordValido = false;  
        }else{
            document.querySelector('.alertaPassword').innerHTML=" ";
            passwordValido = true;
        }
        estadoBoton();
   
    }

    let formulario = document.querySelector('.formulario');
    
    
    formulario.onsubmit = function () {

        if (!estadoBoton()) {
            event.preventDefault();
        }
    }
}