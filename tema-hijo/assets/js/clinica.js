console.log("JavaScript de la clínica cargado.");

const botonImprimir = document.querySelector(".clinica-imprimir");

if (botonImprimir) {
    botonImprimir.addEventListener("click", function () {
        window.print();
    });
}