
window.onload = function () {

let indice = 0;

function innerPosteo(post,fecha,hora) {
    var divPosteo = document.getElementById('divUltimosPosteos');
    return divPosteo.innerHTML = "<div class='post'><h3 class='Usuario'><a href='/users/"+post['id']+"'><img src='/storage/foto_perfil/"+post['id']+"/"+post['foto_perfil']+"'>"+post['usuario']+"</a></h3><hr><p class='post-text'>"+post['contenido']+"</b></p><p class='align-text-bottom text-right muted small'>"+fecha+"&nbsp;&nbsp;<b>"+hora+"</b></p> </div> ";
    
}

function formatoFechaHora(post){
    let fechaHora = new Date(post['fechaCreacion']);
    let fecha = ("0"+fechaHora.getDate()).slice(-2) + "/" + ("0"+(fechaHora.getMonth() + 1)).slice(-2) + "/" + fechaHora.getFullYear();
    let hora = ("0"+fechaHora.getHours()).slice(-2) + ":" + ("0"+fechaHora.getMinutes()).slice(-2);
    tiempo = [fecha,hora];
    return tiempo;
}


let post = posts[indice];
formatoFechaHora(post);
innerPosteo(post, tiempo[0],tiempo[1]);

  document.querySelector('.flecha-derecha').onclick = function() {

    indice += 1;
    if (indice > posts.length - 1) {
        indice = 0;

    };
    post = posts[indice];
    formatoFechaHora(post);
    innerPosteo(post, tiempo[0],tiempo[1]);
};

    document.querySelector('.flecha-izquierda').onclick = function() {

        indice -= 1;
        if (indice < 0) {
            indice = posts.length - 1;

        };
        post = posts[indice];
        formatoFechaHora(post);
        innerPosteo(post, tiempo[0],tiempo[1]);
    } 


}