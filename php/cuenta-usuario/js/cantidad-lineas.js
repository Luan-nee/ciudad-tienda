let descripProduc = document.querySelectorAll(".description-producto");
let puntoSuspensivos = document.querySelectorAll(".puntSuspensivo")
let tamPantalla = window.innerWidth;

console.log(descripProduc[0]);

// obtener la altura de elemento párrafo
if(descripProduc[0].offsetHeight >= 108 && tamPantalla <= 600 ){
    descripProduc[0].classList.toggle("overflow-text");
    puntoSuspensivos[0].classList.toggle("display--block");
}

/*
Desarrolla un algoritmos en javascript que oculte 
el exceso de texto del elemento parrafo.
Este parrafo contiene una pequeña descripción
del producto que el usuario digitó, pero 
es tal largo que malogra el diseño.

El exceso de texto sea remplazado por [...] y 
seguidamente por una opción que diga "leer más".

Esta opción tiene que agrandar el contenedor
del parrafo para que todo el parrafo sea visible.

y también un botón a final del todo el parrafo que
diga "leer menos", para ocultar todo el texto
excendente del elemento párrafo.
*/