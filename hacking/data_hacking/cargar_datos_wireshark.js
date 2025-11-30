document.addEventListener("DOMContentLoaded", function () {

    const jsonFilePath = 'data_hacking/datos_wireshark.json';

    let videos = [];
    let indice = 0;

    fetch(jsonFilePath)
        .then(response => response.json())
        .then(data => {
            videos = data.urls_wireshark;
            mostrarVideo();
        })
        .catch(error => console.error('Error al cargar el JSON:', error));

    function mostrarVideo() {
        const titulo = document.getElementById('titulo_de_video');
        const iframe = document.getElementById('iframe_de_video');
        
        titulo.textContent = videos[indice].titulo;
        iframe.src = videos[indice].url;
    }

    window.siguiente_url = function() {
        indice = (indice + 1) % videos.length;
        mostrarVideo();
    }

    window.anterior_url = function() {
        indice = (indice - 1 + videos.length) % videos.length;
        mostrarVideo();
    }
});