import Swal from 'https://cdn.jsdelivr.net/npm/sweetalert2@8/src/sweetalert2.js'; 
let contactoForm = document.querySelector('form.contacto');  
console.log(contactoForm);
contactoForm.onsubmit = function(e) {
    //e.preventDefault;
    Swal.fire(
        'Mensaje enviado',
        'Gracias por comunicarse con RedSo',
        'success'
      )
}