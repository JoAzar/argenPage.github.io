document.addEventListener("DOMContentLoaded", function () {
    const jsonFilePath = 'data/datos_postgresql.json';

    fetch(jsonFilePath)
        .then(response => response.json())
        .then(data => {
            renderTiposDeDatos(data.tipos_de_datos_numericos);
            renderTiposDeDatos(data.tipos_de_datos_de_texto);
            renderTiposDeDatos(data.tipos_de_datos_fecha_y_hora);
            renderTiposDeDatos(data.tipos_de_datos_booleanos);
            renderTiposDeDatos(data.tipos_de_datos_de_rangos);
            renderTiposDeDatos(tipos_de_datos_json_jsonb);
            renderTiposDeDatos(tipos_de_datos_de_arreglos);
            renderTiposDeDatos(tipos_de_datos_de_identificacion_unica);
            renderTiposDeDatos(tipos_de_datos_de_binarios);
            renderTiposDeDatos(data.tipos_de_datos_geometricos);
        })
        .catch(error => console.error('Error al cargar el JSON:', error));

    function renderTiposDeDatos(tipos) {
        const contenedor = document.getElementById('contenedor');

        tipos.forEach(tipo => {
        const tipoDiv = document.createElement('div');
        tipoDiv.classList.add('letraBlanco', 'radius', 'padding1');

        const titulo = document.createElement('h1');
        titulo.classList.add('letraAzul', 'padding2', 'dropSombraNegra', 'textoLato', 'margen2');
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