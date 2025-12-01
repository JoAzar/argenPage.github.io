document.addEventListener("DOMContentLoaded", function () {
    const jsonFilePath = 'data_lenguajes/datos_tools.json';

    fetch(jsonFilePath)
        .then(response => response.json())
        .then(data => {
            renderTiposDeDatos(data.urls_tools);
        })
        .catch(error => console.error('Error al cargar el JSON:', error));

    function renderTiposDeDatos(tipos) {
        const contenedor = document.getElementById('contenedor');
        if(!contenedor) {
            console.error('no se encontró el contenedor');
            return;
        }
        tipos.forEach(tipo => {

        const titulo = document.createElement('h3');
        titulo.classList.add('bordeBlancoFino', 'letraBlanca', 'padding2', 'sombraNegra', 'textoLato', 'margen2', 'fondoNegro','radius');
        titulo.textContent = tipo.titulo;

        const url = document.createElement('a');
        url.classList.add('letraAmarilla', 'centrarItem', 'bold', 'padding3', 'dropSombraNegra', 'inferiorRadius', 'wid100', 'letraBlancaHover');
        url.href = tipo.url;
        url.textContent = tipo.url;
        url.target = "_blank";

        contenedor.appendChild(titulo);
        contenedor.appendChild(url);
        });
    }
});