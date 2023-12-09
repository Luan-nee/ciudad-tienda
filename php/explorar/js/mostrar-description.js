const conteninerProduct = document.querySelector("#conteinerProducto");
conteninerProduct.addEventListener("click", (e)=>{
    // console.log(e.target.clientHeight);
    // console.log(e.target.clientWidth);
    let widthProduct = e.target.clientWidth; //obteniendo el width del elemento
    let id = e.target.attributes[1].value; //obteniendo la Id del producto
    console.log(e);

    e.stopPropagation();
})