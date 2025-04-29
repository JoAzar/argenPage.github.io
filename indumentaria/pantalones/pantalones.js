document.addEventListener('DOMContentLoaded', function() {
    fetch('lista_productos_pantalones.json')
        .then(response => response.json())
        .then(data => {
            const container = document.querySelector('main2');
            const productos = data.articulo1;

            productos.forEach(producto => {
                const card = document.createElement('div');
                card.classList.add('manito', 'reboteHover', 'radius', 'padding2');
                
                //Contenedor de la imagen
                const imgBx = document.createElement('div');
                imgBx.classList.add('imgBx');
                const img = document.createElement('img');
                img.classList.add('radius');
                img.src = producto.imagen;

                //Redimensionar las imágenes
                img.style.width = '100%';        
                img.style.height = '200px';    
                img.style.objectFit = 'cover';

                imgBx.appendChild(img);
                card.appendChild(imgBx);

                //Contenedor de contenido
                const content = document.createElement('div');
                content.classList.add('content');
                
                //Detalles del producto
                const details = document.createElement('div');
                details.classList.add('details');
                details.style.textAlign = "center";

                //Nombre del producto en un SVG
                const wrapper = document.createElement('div');
                wrapper.classList.add('wrapper','margen2', 'padding2', 'shadow-inset-center', 'radius');
                const svg = document.createElement('svg');
                const text = document.createElement('text');
                text.setAttribute('x', '50%');
                text.setAttribute('y', '50%');
                text.setAttribute('dy', '.35em');
                text.setAttribute('text-anchor', 'middle');
                text.textContent = producto.nombre || "Indefinido";
                text.classList.add('tamaniopeq');
                svg.appendChild(text);
                wrapper.appendChild(svg);
                details.appendChild(wrapper);

                //Modo de pago
                const modoDePago = document.createElement('h4');
                modoDePago.classList.add('letraBlanca','textoLato', 'fondoAzul', 'radius');
                modoDePago.textContent = producto['modo de pago'] || producto['Modo de pago'] || "Comunicarse con el vendedor";
                details.appendChild(modoDePago);

                //Precio
                const precio = document.createElement('h4');
                precio.classList.add('letraNegra','textoLato');
                precio.textContent = producto.precio || "Consultar precio al vendedor";
                details.appendChild(precio);

                //Código de producto
                const codigoProducto = document.createElement('h5');
                codigoProducto.classList.add('codigoProducto','letraNegra','textoLato');
                codigoProducto.textContent = `Código: ${producto.codigoProducto || "Código no disponible"}`;
                details.appendChild(codigoProducto);

                //Añadir los detalles al contenedor de contenido
                content.appendChild(details);
                card.appendChild(content);

                //Añadir la tarjeta al contenedor principal
                container.appendChild(card);
            });
        })
        .catch(error => {
            console.error('Error al cargar el archivo', error);
        });
});