import Swal from 'https://cdn.jsdelivr.net/npm/sweetalert2@8/src/sweetalert2.js'; 
window.onload = function(){ 
    
    let borrarPost = document.querySelectorAll('form.borrarPost');  
    
for(let i = 0;i<borrarPost.length;i++) { 
    let eliminar = borrarPost[i].querySelector('button');
    eliminar.onclick = function() { 
          
        Swal.fire({
            title: '¿Está seguro que quiere borrar el post?',
            text: "No podrá revertir este cambio",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4e6994',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Si, borrarlo!',
            cancelButtonText: "Cancelar",
          }).then((result) => {
            if (result.value) {
              Swal.fire(
                'Borrado!',
                'Tu posteo fue borrado.',
                'success'
              ) 
              borrarPost[i].submit();
            } 
          })
    }

} 
}
