function Confirmacion(e) {
    if (confirm("¿Está seguro de que desea eliminar el registro?")) {
        return true;
    } 
    else {
        evento.preventDefault();
    }
}
let linkDelete = document.querySelectorAll(".table__item__link");
for (var i = 0; i < linkDelete.lenght; i++) {
    linkDelete[i].addEventListener('click', confirmacion);
}