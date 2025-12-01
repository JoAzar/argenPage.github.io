const contenido_p='pub_8003dfecc17b4be6acf1fd02b02661b8';
const contenido_h1='&country=ar&language=es';
const iframe2=contenido_p+contenido_h1;
async function cargarNoticias() {
    try {
      let response = await fetch(`https://newsdata.io/api/1/news?apikey=${iframe2}`);
      let data = await response.json();

      let contenedor = document.getElementById("contenedorNoticias");
      contenedor.innerHTML = "";

      data.results.forEach(noticia => {
        let div = document.createElement("div");
        div.className = "noticia";

        div.innerHTML = `
          <h1 class="margen2 padding2 textoLato letraNegraOscura bold">${noticia.title}</h1>
          ${noticia.image_url ? `<img class="bordeNegroFino dropSombraNegra" src="${noticia.image_url}" alt="Imagen de la noticia">` : ""}
          <h3 class="margen2 letraNegra textoLato">${noticia.description || "Sin descripción"}</h3>
          <a class="letraNegraOscura bold margen2 textoLato radius padding1 letraBlancaHover fondoNegroHover fondoBlanco" href="${noticia.link}" target="_blank">Leer más</a>
          <div class="linea-fina"></div>
          <br>
        `;

        contenedor.appendChild(div);
      });
    } catch (error) {
      console.error("Error cargando noticias:", error);
    }
  }

  cargarNoticias();