let email = document.getElementById('email');
let password = document.getElementById('password');

email.onblur = function() {
    let valor = email.value;
    let valido = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(valor)
    if (!valido) {
     document.querySelector('.alertaEmail').innerHTML="<small style='color:red;'><b>Email inválido</b></small>";  
    }else{
        document.querySelector('.alertaEmail').innerHTML=" ";
    }
}

password.onblur = function() {
    let valor = password.value.length;
    if (valor < 8) {
     document.querySelector('.alertaPassword').innerHTML="<small style='color:red;'><b>La contraseña debe tener al menos 8 caracteres</b></small>";  
    }else{
        document.querySelector('.alertaPassword').innerHTML=" ";
    }
}