const btnSearch = document.querySelector("#imgSearch");
const inputSearch = document.getElementById("inputSearch");

btnSearch.addEventListener("click",()=>{
    if(inputSearch.value != ""){
        document.input_search.submit();
    }
});