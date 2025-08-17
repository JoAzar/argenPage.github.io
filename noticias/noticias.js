async function cargarNoticias() {
    try {
      let response = await fetch("https://newsdata.io/api/1/news?apikey=pub_8003dfecc17b4be6acf1fd02b02661b8&country=ar&language=es");
      let data = await response.json();

      let contenedor = document.getElementById("contenedorNoticias");
      contenedor.innerHTML = "";

      data.results.forEach(noticia => {
        let div = document.createElement("div");
        div.className = "noticia";

        div.innerHTML = `
          <h2>${noticia.title}</h2>
          ${noticia.image_url ? `<img src="${noticia.image_url}" alt="Imagen de la noticia">` : ""}
          <p>${noticia.description || "Sin descripción"}</p>
          <a class="letraRoja" href="${noticia.link}" target="_blank">Leer más</a>
        `;

        contenedor.appendChild(div);
      });
    } catch (error) {
      console.error("Error cargando noticias:", error);
    }
  }

  cargarNoticias();