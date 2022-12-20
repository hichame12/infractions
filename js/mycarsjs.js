var Second_Titre = document.getElementById('Second_Titre');
var Content_Add = document.getElementById('Content_Add');
var Add_Cars = document.getElementById('Add_Cars');
var AddButtonCar = document.getElementById('AddButtonCar');

AddButtonCar.addEventListener("click", F_AddButtonCar);
function F_AddButtonCar() {
    console.log('button add Cars');
    Second_Titre.innerHTML = "Add New Cars";
    Content_Cars.style.display = "none";
    Add_Cars.style.display = "block";
}