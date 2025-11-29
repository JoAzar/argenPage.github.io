const intervalo_para_cambiar_imagen = 10000;

setInterval(function() {
    const main_objetivo = document.getElementById("maintag");
    if(main_objetivo.classList.contains("fondoAnimado12")) {
        main_objetivo.classList.remove("fondoAnimado12");
        main_objetivo.classList.add("fondoNegro");
    }else{
        main_objetivo.classList.remove("fondoNegro");
        main_objetivo.classList.add("fondoAnimado12");
    }
}, intervalo_para_cambiar_imagen);

