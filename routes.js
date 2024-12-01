document.addEventListener('DOMContentLoaded', function() {
    fetch('../routes.json')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('redes-sociales');
            data.sigueme_en.forEach(red => {
                const a = document.createElement('a');
                a.href = red.url;
                a.classList.add('shadow-inset-center-hover', 'radius');
                a.classList.add(red.plataforma.toLowerCase());
                container.appendChild(a);
            });
        })
});

fetch('../routes.json')
    .then(response => response.json())
    .then(data => {
        const contenedorLenguajes = document.getElementById('contenedor-lenguajes');
        data.lenguajes.forEach(lenguaje => {
            const div = document.createElement('div');
            div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
            div.onclick = () => {
                location.href = lenguaje.url;
            };
            const innerDiv = document.createElement('div');
            innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'tamanioMed', 'padding2', 'radius');

            const p = document.createElement('p');
            p.classList.add('tamaniopeq', 'letraCeleste', 'bordeGrisArriba');
            p.textContent = lenguaje.descripcion || 'Descripción no disponible';

            const h1 = document.createElement('h1');
            h1.classList.add('textoLato', 'letraBlanca', 'tamanioMed');
            h1.textContent = lenguaje.nombre;
            
            innerDiv.appendChild(h1);
            div.appendChild(innerDiv);
            contenedorLenguajes.appendChild(div);
            innerDiv.appendChild(p);
        });
    })

fetch('../routes.json')
    .then(response => response.json())
    .then(data => {
        const contenedorBitacoras = document.getElementById('contenedor-bitacora');
        data.bitacora.forEach(bitacora => {
            const div = document.createElement('div');
            div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
            div.onclick = () => {
                location.href = bitacora.url;
            };
            const innerDiv = document.createElement('div');
            innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'tamanioMed', 'padding2', 'radius');

            const p = document.createElement('p');
            p.classList.add('tamaniopeq', 'letraCeleste', 'bordeGrisArriba');
            p.textContent = bitacora.descripcion || 'Descripción no disponible';

            const h1 = document.createElement('h1');
            h1.classList.add('textoLato', 'letraBlanca', 'tamanioMed');
            h1.textContent = bitacora.nombre;
            
            innerDiv.appendChild(h1);
            div.appendChild(innerDiv);
            contenedorBitacoras.appendChild(div);
            innerDiv.appendChild(p);
        });
    })

fetch('../routes.json')
    .then(response => response.json())
    .then(data => {
        const contenedorHacking = document.getElementById('contenedor-hacking');
        data.hacking.forEach(hacking => {
            const div = document.createElement('div');
            div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
            div.onclick = () => {
                location.href = hacking.url;
            };
            const innerDiv = document.createElement('div');
            innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'tamanioMed', 'padding2', 'radius');

            const p = document.createElement('p');
            p.classList.add('tamaniopeq', 'letraCeleste', 'bordeGrisArriba');
            p.textContent = hacking.descripcion || 'Descripción no disponible';

            const h1 = document.createElement('h1');
            h1.classList.add('textoLato', 'letraBlanca', 'tamanioMed');
            h1.textContent = hacking.nombre;
            
            innerDiv.appendChild(h1);
            div.appendChild(innerDiv);
            contenedorHacking.appendChild(div);
            innerDiv.appendChild(p);
        });
    })

fetch('../routes.json')
    .then(response => response.json())
    .then(data => {
        const contenedorHardware = document.getElementById('contenedor-hardware');
        data.hardware.forEach(hardware => {
            const div = document.createElement('div');
            div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
            div.onclick = () => {
                location.href = hardware.url;
            };
            const innerDiv = document.createElement('div');
            innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'tamanioMed', 'padding2', 'radius');

            const p = document.createElement('p');
            p.classList.add('tamaniopeq', 'letraCeleste', 'bordeGrisArriba');
            p.textContent = hardware.descripcion || 'Descripción no disponible';

            const h1 = document.createElement('h1');
            h1.classList.add('textoLato', 'letraBlanca', 'tamanioMed');
            h1.textContent = hardware.nombre;
            
            innerDiv.appendChild(h1);
            div.appendChild(innerDiv);
            contenedorHardware.appendChild(div);
            innerDiv.appendChild(p);
        });
    })


/*------------------------- RUTEO DE LAS RUTAS ABSOLUTAS -----------------------------*/

function obtenerRuta(relativa) {
    const currentPath = window.location.pathname;
    const repoBase = "/argenPage.github.io";
    if (currentPath.startsWith(repoBase)) {
        const pathParts = currentPath.split("/");
        const subFolder = pathParts[2];
        if (relativa.startsWith("/")) {
            return repoBase + "/" + relativa.slice(1) + ".html";
        } else {
            return repoBase + "/" + subFolder + "/" + relativa + ".html";
        }
    } else {
        let rutaFinal = (relativa.startsWith("/") ? relativa : "/" + relativa);
        
        if (!rutaFinal.endsWith(".html")) {
            rutaFinal += ".html";
        }

        return rutaFinal;
    }
}



    
fetch('../routesAbsolute.json')
    .then(response => response.json())
    .then(data => {
        const menu = document.getElementById('navMenu');
        data.links.forEach(link => {
        const li = document.createElement('li');
        const h1 = document.createElement('h1');
        h1.className = 'nav1 textoLato tamaniopeq growHover';
        h1.textContent = link.name;
        h1.onclick = () => location.href = obtenerRuta(link.url);
    
        li.appendChild(h1);
        menu.appendChild(li);
        });
    })