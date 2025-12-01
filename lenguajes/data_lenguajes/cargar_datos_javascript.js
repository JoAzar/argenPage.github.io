document.addEventListener("DOMContentLoaded", function () {
    const jsonFilePath = 'data_lenguajes/datos_javascript.json';

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
        titulo.classList.add('bordeAmarillo', 'letraAmarilla', 'padding2', 'sombraNegra', 'textoLato', 'margen2', 'fondoNegro','radius');
        titulo.textContent = tipo.titulo;

        const animacion = document.createElement('p');
        animacion.classList.add('letraNegra', 'centrarItem', 'bold', 'fondoAmarillo', 'padding3', 'dropSombraNegra', 'superiorRadius', 'wid100');
        animacion.textContent = tipo.codigo_de_animacion;

        const codigo_javascript = document.createElement('img');
        codigo_javascript.classList.add('letraAmarilla', 'centrarItem', 'bold', 'fondoNegro', 'padding3', 'dropSombraNegra', 'inferiorRadius', 'wid100');
        codigo_javascript.src = tipo.codigo_de_js_de_ejemplo;

        contenedor.appendChild(titulo);
        contenedor.appendChild(animacion);
        contenedor.appendChild(codigo_javascript);
        });
    }
});