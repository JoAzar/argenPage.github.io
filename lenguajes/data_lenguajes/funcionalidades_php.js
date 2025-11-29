const intervalo_para_cambiar_imagen = 10000;

setInterval(function() {
    const main_objetivo = document.getElementById("maintag");
    if(main_objetivo.classList.contains("fondoAnimado14")) {
        main_objetivo.classList.remove("fondoAnimado14");
        main_objetivo.classList.add("fondoNegroSuave");
    }else{
        main_objetivo.classList.remove("fondoNegroSuave");
        main_objetivo.classList.add("fondoAnimado14");
    }
}, intervalo_para_cambiar_imagen);

