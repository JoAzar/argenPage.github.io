document.addEventListener('DOMContentLoaded', function() {
    const jsonFilePath = window.location.pathname.includes('/carpeta1/') ? '../routes.json' : '../../routes.json';
    cargarRedesSociales(jsonFilePath);
});

function cargarRedesSociales(filePath) {
    fetch(filePath)
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('redes-sociales');
            data.sigueme_en.forEach(red => {    
                const a = document.createElement('a');
                a.href = red.url;
                a.classList.add('growHover', 'reboteHover');
                a.classList.add(red.plataforma.toLowerCase());
                a.classList.add(red.plataforma.toLowerCase() + "Hover");
                container.appendChild(a);
            });
        })
        .catch(error => {
            console.error("Error al cargar el archivo:", error);
        });
}

fetch('../routes.json')
    .then(response => response.json())
    .then(data => {
        const contenedorLenguajes = document.getElementById('contenedor-lenguajes');
        data.lenguajes.forEach(lenguaje => {
            const div = document.createElement('div');
            div.classList.add('margen2', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
            div.onclick = () => {
                location.href = lenguaje.url;
            };
            const innerDiv = document.createElement('div');
            innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius', 'tamaniopeq');

            const p = document.createElement('p');
            p.classList.add('tamanioMin', 'letraCeleste');
            p.textContent = lenguaje.descripcion || 'Descripción no disponible';

            const h1 = document.createElement('h1');
            h1.classList.add('textoLato', 'letraBlanca');
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
            innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius', 'tamaniopeq');

            const p = document.createElement('p');
            p.classList.add('tamanioMin', 'letraCeleste');
            p.textContent = bitacora.descripcion || 'Descripción no disponible';

            const h1 = document.createElement('h1');
            h1.classList.add('textoLato', 'letraBlanca');
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
            innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius', 'tamaniopeq');

            const p = document.createElement('p');
            p.classList.add('tamanioMin', 'letraCeleste');
            p.textContent = hacking.descripcion || 'Descripción no disponible';

            const h1 = document.createElement('h1');
            h1.classList.add('textoLato', 'letraBlanca');
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
        innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius', 'tamaniopeq');

        const p = document.createElement('p');
        p.classList.add('tamanioMin', 'letraCeleste');
        p.textContent = hardware.descripcion || 'Descripción no disponible';

        const h1 = document.createElement('h1');
        h1.classList.add('textoLato', 'letraBlanca');
        h1.textContent = hardware.nombre;
        
        innerDiv.appendChild(h1);
        div.appendChild(innerDiv);
        contenedorHardware.appendChild(div);
        innerDiv.appendChild(p);
    });
})

fetch('../routes.json')
.then(response => response.json())
.then(data => {
    const contenedorTienda = document.getElementById('contenedor-tienda');
    data.tienda.forEach(tienda => {
        const div = document.createElement('div');
        div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
        div.onclick = () => {
            location.href = tienda.url;
        };
        const innerDiv = document.createElement('div');
        innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius');

        const p = document.createElement('p');
        p.classList.add('tamaniopeq', 'letraCeleste');
        p.textContent = tienda.descripcion || 'Descripción no disponible';

        const h1 = document.createElement('h1');
        h1.classList.add('textoLato', 'letraBlanca');
        h1.textContent = tienda.nombre;
        
        innerDiv.appendChild(h1);
        div.appendChild(innerDiv);
        contenedorTienda.appendChild(div);
        innerDiv.appendChild(p);
    });
})

fetch('routes_accesorios.json')
.then(response => response.json())
.then(data => {
    const contenedorTienda = document.getElementById('contenedor-tienda');
    data.tienda.forEach(tienda => {
        const div = document.createElement('div');
        div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
        div.onclick = () => {
            location.href = tienda.url;
        };
        const innerDiv = document.createElement('div');
        innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius');

        const p = document.createElement('p');
        p.classList.add('tamaniopeq', 'letraCeleste');
        p.textContent = tienda.descripcion || 'Descripción no disponible';

        const h1 = document.createElement('h1');
        h1.classList.add('textoLato', 'letraBlanca');
        h1.textContent = tienda.nombre;
        
        innerDiv.appendChild(h1);
        div.appendChild(innerDiv);
        contenedorTienda.appendChild(div);
        innerDiv.appendChild(p);
    });
})

fetch('routes_pantalones.json')
.then(response => response.json())
.then(data => {
    const contenedorTienda = document.getElementById('contenedor-tienda');
    data.tienda.forEach(tienda => {
        const div = document.createElement('div');
        div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
        div.onclick = () => {
            location.href = tienda.url;
        };
        const innerDiv = document.createElement('div');
        innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius');

        const p = document.createElement('p');
        p.classList.add('tamaniopeq', 'letraCeleste');
        p.textContent = tienda.descripcion || 'Descripción no disponible';

        const h1 = document.createElement('h1');
        h1.classList.add('textoLato', 'letraBlanca');
        h1.textContent = tienda.nombre;
        
        innerDiv.appendChild(h1);
        div.appendChild(innerDiv);
        contenedorTienda.appendChild(div);
        innerDiv.appendChild(p);
    });
})

fetch('routes_zapatillas.json')
.then(response => response.json())
.then(data => {
    const contenedorTienda = document.getElementById('contenedor-tienda');
    data.tienda.forEach(tienda => {
        const div = document.createElement('div');
        div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
        div.onclick = () => {
            location.href = tienda.url;
        };
        const innerDiv = document.createElement('div');
        innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius');

        const p = document.createElement('p');
        p.classList.add('tamaniopeq', 'letraCeleste');
        p.textContent = tienda.descripcion || 'Descripción no disponible';

        const h1 = document.createElement('h1');
        h1.classList.add('textoLato', 'letraBlanca');
        h1.textContent = tienda.nombre;
        
        innerDiv.appendChild(h1);
        div.appendChild(innerDiv);
        contenedorTienda.appendChild(div);
        innerDiv.appendChild(p);
    });
})

fetch('routes_ropa_interior.json')
.then(response => response.json())
.then(data => {
    const contenedorTienda = document.getElementById('contenedor-tienda');
    data.tienda.forEach(tienda => {
        const div = document.createElement('div');
        div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
        div.onclick = () => {
            location.href = tienda.url;
        };
        const innerDiv = document.createElement('div');
        innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius');

        const p = document.createElement('p');
        p.classList.add('tamaniopeq', 'letraCeleste');
        p.textContent = tienda.descripcion || 'Descripción no disponible';

        const h1 = document.createElement('h1');
        h1.classList.add('textoLato', 'letraBlanca');
        h1.textContent = tienda.nombre;
        
        innerDiv.appendChild(h1);
        div.appendChild(innerDiv);
        contenedorTienda.appendChild(div);
        innerDiv.appendChild(p);
    });
})

fetch('routes_remeras.json')
.then(response => response.json())
.then(data => {
    const contenedorTienda = document.getElementById('contenedor-tienda');
    data.tienda.forEach(tienda => {
        const div = document.createElement('div');
        div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
        div.onclick = () => {
            location.href = tienda.url;
        };
        const innerDiv = document.createElement('div');
        innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius');

        const p = document.createElement('p');
        p.classList.add('tamaniopeq', 'letraCeleste');
        p.textContent = tienda.descripcion || 'Descripción no disponible';

        const h1 = document.createElement('h1');
        h1.classList.add('textoLato', 'letraBlanca');
        h1.textContent = tienda.nombre;
        
        innerDiv.appendChild(h1);
        div.appendChild(innerDiv);
        contenedorTienda.appendChild(div);
        innerDiv.appendChild(p);
    });
})

fetch('routes_articulos_electronicos.json')
.then(response => response.json())
.then(data => {
    const contenedorTienda = document.getElementById('contenedor-tienda');
    data.tienda.forEach(tienda => {
        const div = document.createElement('div');
        div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
        div.onclick = () => {
            location.href = tienda.url;
        };
        const innerDiv = document.createElement('div');
        innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius');

        const p = document.createElement('p');
        p.classList.add('tamaniopeq', 'letraCeleste');
        p.textContent = tienda.descripcion || 'Descripción no disponible';

        const h1 = document.createElement('h1');
        h1.classList.add('textoLato', 'letraBlanca');
        h1.textContent = tienda.nombre;
        
        innerDiv.appendChild(h1);
        div.appendChild(innerDiv);
        contenedorTienda.appendChild(div);
        innerDiv.appendChild(p);
    });
})

fetch('routes.json')
.then(response => response.json())
.then(data => {
    const contenedorFormulario = document.getElementById('contenedor-formulario');
    data.formulario.forEach(formulario => {
        const div = document.createElement('div');
        div.classList.add('margen1', 'radius', 'encuadrar', 'shadow-inset-center-hover', 'bordeAzulIzqHover', 'bordeAzulAbajoHover', 'growHover', 'manito');
        div.onclick = () => {
            location.href = formulario.url;
        };
        const innerDiv = document.createElement('div');
        innerDiv.classList.add('letraBlanca', 'sombraNegra', 'textoLato', 'padding2', 'radius', 'tamaniopeq');

        const p = document.createElement('p');
        p.classList.add('tamanioMin', 'letraCeleste');
        p.textContent = formulario.descripcion || 'Descripción no disponible';

        const h1 = document.createElement('h1');
        h1.classList.add('textoLato', 'letraBlanca');
        h1.textContent = formulario.nombre;
        
        innerDiv.appendChild(h1);
        div.appendChild(innerDiv);
        contenedorFormulario.appendChild(div);
        innerDiv.appendChild(p);
    });
})


/*------------------------- RUTEO DE LAS RUTAS ABSOLUTAS -----------------------------*/


function obtenerRuta(relativa) {
    const currentPath = window.location.pathname;
    const repoBase = "/argenPage.github.io";
    const isGitHubPages = currentPath.startsWith(repoBase);

    if (isGitHubPages) {
        const pathParts = currentPath.split("/");
        const subFolder = pathParts.length > 2 ? pathParts[2] : '';
        if (relativa.startsWith("/")) {
            if (!relativa.endsWith(".html")) {
                return repoBase + "/" + relativa.slice(1) + ".html";
            } else {
                return repoBase + "/" + relativa.slice(1);
            }
        } else {
            let ruta = repoBase + "/" + subFolder + "/" + relativa;
            if (!ruta.endsWith(".html")) {
                ruta += ".html";
            }
            return ruta;
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
        h1.className = 'nav1 textoLato tamaniopeq growHover shadow-inset-center-hover fina letraBlanca sombraNegra bordeRojoIzqHover radiusDerHover';
        h1.textContent = link.name;
        h1.onclick = () => location.href = obtenerRuta(link.url);
    
        li.appendChild(h1);
        menu.appendChild(li);
        });
    })