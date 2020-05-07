    function mostrarRespuestas() {
        let body = document.querySelector("body"); 
        let respuesta = document.querySelectorAll(".respuesta");
        let preguntas = document.querySelectorAll(".preguntas");
        if (body.clientWidth < 500) {
            
            for (let index = 0; index < respuesta.length; index++) {                
                respuesta[index].hidden = true;
                preguntas[index].style= "cursor: pointer;";  
            }
            
            let pregunta1 = document.querySelector(".pregunta-1");
            let respuesta1 = document.querySelector(".respuesta-1");
            pregunta1.onclick = function(){
            respuesta1.toggleAttribute("hidden")
            }
            let pregunta2 = document.querySelector(".pregunta-2");
            let respuesta2 = document.querySelector(".respuesta-2");
            pregunta2.onclick = function(){
            respuesta2.toggleAttribute("hidden")
            }
            let pregunta3 = document.querySelector(".pregunta-3");
            let respuesta3 = document.querySelector(".respuesta-3");
            pregunta3.onclick = function(){
            respuesta3.toggleAttribute("hidden")
            }
        }
        else{
            
            for (let index = 0; index < respuesta.length; index++) {
                console.log("qwe");
                
                respuesta[index].removeAttribute("hidden");
                preguntas[index].removeAttribute("style");
            }
        }
    }

window.onload = function(){
        mostrarRespuestas();
    
    window.onresize = function(){
        mostrarRespuestas();
    }
}