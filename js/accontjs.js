var Content_Info = document.getElementById('Content_Info');
var Content_Cars = document.getElementById('Content_Cars');

var AddButton = document.getElementById('AddButton');

AddButton.addEventListener("click", F_AddButton);
function F_AddButton() {
    console.log('button add Declarants');
    Second_Titre.innerHTML = "Add New Declarant";
    Content_Info.style.display = "none";
    Content_Add.style.display = "block";
};