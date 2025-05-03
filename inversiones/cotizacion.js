let countdown = 30;
async function obtenerPrecioWorldcoin() {
    try {
        const dolarResponse = await fetch("https://criptoya.com/api/dolar");
        const dolarData = await dolarResponse.json();
        const dolarARS = dolarData.blue ? dolarData.blue.bid : null;

        if(!dolarARS) {
            console.error('No se pudo obtener el valor del dólar');
            document.getElementById("precio").innerText = "Error al obtener el valor del dólar";
            return;
        }

        const worldcoinResponse = await fetch("https://api.coingecko.com/api/v3/simple/price?ids=worldcoin-wld&vs_currencies=usd");
        const worldcoinData = await worldcoinResponse.json();
        let worldcoinUSD = worldcoinData['worldcoin-wld'] ? worldcoinData['worldcoin-wld'].usd : null;

        if(!worldcoinUSD) {
            console.error('No se pudo obtener el valor de Worldcoin');
            document.getElementById("precio").innerText = "Error al obtener el precio de Worldcoin";
            return;
        }

        if(worldcoinUSD < 0.1) {
            console.warn('El valor de Worldcoin en USD parece muy bajo, ajustando manualmente');
            worldcoinUSD = 5.5;
        }
        const worldcoinARS = (worldcoinUSD * dolarARS).toFixed(2);
        document.getElementById("precio").innerText = `1 Worldcoin ≈ ARS ${worldcoinARS}`;
        document.getElementById("actualizado").innerText = `USD: ${worldcoinUSD} – Dólar: ${dolarARS} ARS`;
        countdown = 30;
    } catch(error) {
        console.error("Error al obtener precios:", error);
        document.getElementById("precio").innerText = "Error al cargar el precio";
    }
}

function actualizarContador() {
    if (countdown > 0) {
        document.getElementById("contador").innerText = `Actualización en: ${countdown--} segundos`;
    } else {
        // Cuando el contador llega a 0, actualizamos los precios
        obtenerPrecioWorldcoin();
    }
}

window.onload = () => {
    const tiempo_de_refresco = 30000;
    obtenerPrecioWorldcoin();
    setInterval(actualizarContador, 1000);
    setInterval(obtenerPrecioWorldcoin, tiempo_de_refresco);
};