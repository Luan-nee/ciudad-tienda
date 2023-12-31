const conteninerProduct = document.querySelector("#conteinerProducto");
var elemenTemp = {
    id: "",
    element: "",
    width: ""
};
var elementoActual = {
    id: "",
    element: "",
    width: "" 
};
let padreAc = {
    id: "",
    element: ""
};
let padreTem= {
    id: "",
    element: ""
};
let flap = 0;
let contador = 0;
let separacion = 20; //separación con respecto al producto
conteninerProduct.addEventListener("click", (e)=>{
    if(e.target.attributes[0].value=='botonObtener'){
        return;
    }
    contador++;
    if(padreAc.id != padreTem.id){
        padreTem.id = padreAc.id;
        padreTem.element = padreAc.element;
    }
    padreAc.id = e.target.offsetParent.attributes[1].value;
    padreAc.element = e.target.offsetParent;

    console.log("id padre actual:" + padreAc.id);
    console.log("id padre actual:" + padreTem.id);

    if(padreAc.id == padreTem.id || padreTem.id == ""){
        padreAc.element.style.zIndex = "2";
    }else{
        padreAc.element.style.zIndex = "2";
        padreTem.element.style.zIndex = "0";
    }

    if(elementoActual.id != elemenTemp.id ){
        elemenTemp.id = elementoActual.id; //obteniendo la Id del producto
        elemenTemp.width = elementoActual.width; //obteniendo el width del elemento
        elemenTemp.element = elementoActual.element;
    }

    elementoActual.id = e.target.attributes[1].value; //obteniendo la Id del producto
    elementoActual.width = e.target.clientWidth; //obteniendo el width del elemento
    elementoActual.element = e.target.nextElementSibling;

    console.log("ID del elemento actual : " + elementoActual.id);
    console.log("ID del elemento temporal : " + elemenTemp.id);

    if(elemenTemp.id == elementoActual.id  || elemenTemp.id == ""){
        elementoActual.element.style.right = "-" + (elementoActual.width + separacion) + "px";
        elementoActual.element.style.opacity = "1";
        flap++;
    }else{
        elementoActual.element.style.right = "-" + (elementoActual.width + separacion) + "px";
        elementoActual.element.style.opacity = "1";

        elemenTemp.element.style.right = "0px";
        elemenTemp.element.style.opacity = "0"
    }
    if(flap == 2){
        elementoActual.element.style.right = "0px";
        elementoActual.element.style.opacity = "0";
        flap = 0;
    }

    e.stopPropagation();
})