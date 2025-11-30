document.addEventListener("DOMContentLoaded", function () {
    const jsonFilePath = 'data_hacking/datos_puertos.json';

    fetch(jsonFilePath)
        .then(response => response.json())
        .then(data => {
            renderTiposDeDatos(data.puertos);
            renderTiposDeDatos(data.comandos_para_escuchar_puertos);
        })
        .catch(error => console.error('Error al cargar el JSON:', error));

    function renderTiposDeDatos(tipos) {
        const contenedor = document.getElementById('contenedor');

        tipos.forEach(tipo => {
        const tipoDiv = document.createElement('div');
        tipoDiv.classList.add('letraBlanco', 'radius');

        const titulo = document.createElement('h1');
        titulo.classList.add('letraAzul', 'dropSombraNegra', 'margenAbajo', 'margenArriba');
        titulo.textContent = tipo.titulo;

        const innerDivHijo = document.createElement('div');
        innerDivHijo.classList.add('cajasEnHorizontal');

        const subtitulo = document.createElement('p');
        subtitulo.classList.add('letraBlanca', 'centrarItem', 'bold', 'radiusDer', 'fondoAzul', 'padding3', 'dropSombraNegra');
        subtitulo.textContent = tipo.subtitulo;

        const descripcion = document.createElement('p');
        descripcion.classList.add('letraNegra', 'centrarItem', 'bold', 'fondoBlanco', 'radiusIzq', 'padding3', 'dropSombraNegra');
        descripcion.textContent = tipo.descripcion;

        innerDivHijo.appendChild(subtitulo);
        innerDivHijo.appendChild(descripcion);
        tipoDiv.appendChild(titulo);
        tipoDiv.appendChild(innerDivHijo);
        contenedor.appendChild(tipoDiv);
        });
    }
});