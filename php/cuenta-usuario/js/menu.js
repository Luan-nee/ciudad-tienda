const btn_verProduct = document.querySelector("#link_producto");
const btn_verDatoUser = document.querySelector("#link_datoUser");

const venta_product = document.querySelector("#section_producto");
const venta_datoUser = document.querySelector("#section_dataUser");

btn_verProduct.addEventListener("click", ()=>{
    btn_verProduct.style.backgroundColor= "#151f28";
    venta_product.style.display = "grid";
    btn_verDatoUser.style.backgroundColor= "#23313ce1";
    venta_datoUser.style.display = "none";
});

btn_verDatoUser.addEventListener("click", ()=>{
    btn_verProduct.style.backgroundColor= "#23313ce1";
    venta_product.style.display = "none";
    btn_verDatoUser.style.backgroundColor= "#151f28";
    venta_datoUser.style.display = "flex";
});