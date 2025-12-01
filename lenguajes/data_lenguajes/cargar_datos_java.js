document.addEventListener("DOMContentLoaded", function () {
    const jsonFilePath = 'data_lenguajes/datos_java.json';

    fetch(jsonFilePath)
        .then(response => response.json())
        .then(data => {
            renderTiposDeDatos(data.animaciones);
        })
        .catch(error => console.error('Error al cargar el JSON:', error));

    function renderTiposDeDatos(tipos) {
        const contenedor = document.getElementById('contenedor');
        if(!contenedor) {
            console.error('no se encontró el contenedor');
            return;
        }
        tipos.forEach(tipo => {

        const titulo = document.createElement('h1');
        titulo.classList.add('bordeRojoFino', 'letraRoja', 'padding2', 'sombraNegra', 'textoLato', 'margen2', 'fondoNegro','radius');
        titulo.textContent = tipo.titulo;

        const subtitulo = document.createElement('p');
        subtitulo.classList.add('letraNegra', 'centrarItem', 'bold', 'fondoBlanco', 'padding3', 'dropSombraNegra', 'superiorRadius', 'wid100');
        subtitulo.textContent = tipo.subtitulo;

        const url = document.createElement('img');
        url.classList.add('letraAmarilla', 'centrarItem', 'bold', 'fondoNegro', 'padding3', 'dropSombraNegra', 'inferiorRadius', 'wid100');
        url.src = tipo.url;

        contenedor.appendChild(titulo);
        contenedor.appendChild(subtitulo);
        contenedor.appendChild(url);
        });
    }
});