// titulo del formulario
let title_form = document.querySelector(".title_form");
// botones
let btn_login = document.querySelector(".btn_login");
let btn_registro = document.querySelector(".btn_registro");
// campos del formulario 
let part_registro = document.querySelector("#registro_part");
let part_login = document.querySelector("#login_part") ;



btn_login.addEventListener("click", ()=>{
    // titulo de form
    title_form.textContent = "Iniciar Seción";
    // campos
    part_login.style.display = "grid";
    part_registro.style.display = "none";
    // btn
    btn_registro.style.display = "block";
    btn_login.style.display = "none";
});
btn_registro.addEventListener("click", ()=>{
    // titulo del form
    title_form.textContent = "Registro";
    // campos
    part_login.style.display = "none";
    part_registro.style.display = "grid";
    // btn 
    btn_registro.style.display = "none";
    btn_login.style.display = "block";
});