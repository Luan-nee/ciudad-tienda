let puntos = document.querySelector(".header_conteiner-puntos");
let ventanaFlotante = document.querySelector(".contiener-opciones-menu");
let cuerpo = document.querySelector("body");
var flap = false;

puntos.addEventListener("click", (e)=>{
    if(e.target.classList[0] != "header_conteiner-puntos" || e.target.classList[0] != "punto"){
        ventanaFlotante.classList.toggle("aparecer-grid");
        flap = true;
    }
    e.stopPropagation();
})
cuerpo.addEventListener("click", (e)=>{
    if(e.target.nodeName != "A"){
        if(e.target.classList[0] != "contiener-opciones-menu" && flap == true){
            ventanaFlotante.classList.toggle("aparecer-grid");
            flap = false;
        }
    }
    e.stopPropagation();
})


/*
Desarrolla un algoritmos en javascript que oculte 
el exceso de texto del elemento parrafo.
Este parrafo contiene una pequeña descripción
del producto que el usuario digitó, pero 
es tan largo que malogra el diseño.

El exceso de texto sea remplazado por [...] y 
seguidamente por una opción que diga "leer más".

Esta opción tiene que agrandar el contenedor
del parrafo para que todo el parrafo sea visible.

y también un botón a final del todo el parrafo que
diga "leer menos", para ocultar todo el texto
excendente del elemento párrafo.
*/