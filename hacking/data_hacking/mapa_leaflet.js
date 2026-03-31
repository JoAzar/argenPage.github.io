
const map = L.map('map').setView([-34.52, -58.78], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap'
}).addTo(map);

fetch('data_hacking/centros_para_mapa_leaflet.json')
    .then(response => response.json())
    .then(data => {
        console.log("Datos cargados:", data);
        dibujarCentros(map, data);
    })
.catch(error => console.error("Error cargando JSON:", error));

function dibujarCentros(mapa, centros) {
  centros.forEach(c => {
    const lat = parseFloat(c.Lat);
    const lon = parseFloat(c.Lon);

    if(!Number.isFinite(lat) || !Number.isFinite(lon)) return;

    const popup = `<strong>${c.Nombre || "Centro sin nombre"}</strong><br>
    ${c.Municipio || ""}
    (${c.Provincia || ""})<br>Tipo: ${c.Tipo || "—"}<br>Más info: ${c.Info || "—"}`;

    L.marker([lat, lon]).addTo(mapa).bindPopup(popup);
  });
}