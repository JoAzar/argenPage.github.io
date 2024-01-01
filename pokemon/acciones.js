function ocultar(){
document.getElementById('obj1').style.display = 'none';
}

function mostrar(){
document.getElementById('obj2').style.display = 'block';
}




function filtrarPokemons(tipoSeleccionado) {
    var cartas = document.getElementsByClassName('cartaPokemon');

    for (var i = 0; i < cartas.length; i++) {
        var carta = cartas[i];

        if (tipoSeleccionado === '' || tipoCarta.includes(tipoSeleccionado)) {
            carta.style.display = 'block';
        } else {
            carta.style.display = 'none';
        }
    }
}
