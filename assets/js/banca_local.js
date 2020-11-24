"use strict";

function cargarPagina(){
    
    let billeteras = document.querySelector("#billeteras");
    let moneda;
    if (billeteras){
        billeteras.addEventListener("change", function(){
            if (billeteras.value==20){
                document.querySelector(".moneda").classList.add("active");
                moneda = billeteras.value;
                obtengoCotizacion(moneda);
            }
            if (billeteras.value!=20){
                document.querySelector(".moneda").classList.remove("active");
            }              
        })
    }

}

document.addEventListener("DOMContentLoaded", cargarPagina);