const conteninerProduct = document.querySelector("#conteinerProducto");
conteninerProduct.addEventListener("click", (e)=>{
    console.log(e.target.attributes[1].value);
    e.stopPropagation();
})