async function cargarDolar() {
    try {
        const res = await fetch('datos_cotizacion_dolar.json');
        if (!res.ok) throw new Error(`Error al cargar el JSON: ${res.status}`);

        const data = await res.json();
        const ultimos = data.slice(-12);
        const meses = {};

        ultimos.forEach(item => {
            const fecha = new Date(item.d);
            const mes = fecha.toLocaleString("es-AR", { month: "long" });
            meses[mes] = item.v;
        });

        const labels = Object.keys(meses);
        const valores = Object.values(meses);

        const dataChart = {
            labels: labels,
            datasets: [{
                label: 'Dólar Oficial (BCRA)',
                data: valores,
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        const config = {
            type: 'bar',
            data: dataChart,
            options: {
                scales: {
                    y: { beginAtZero: false }
                }
            }
        };

        new Chart(document.getElementById('graficoDolar'), config);
    } catch (error) {
        console.error("Error al cargar el dólar:", error);
    }
}

cargarDolar();
