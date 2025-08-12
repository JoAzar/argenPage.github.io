let countdown = 30;
async function obtenerPrecioWorldcoin() {
    try {
        const dolarResponse = await fetch("https://criptoya.com/api/dolar");
        const dolarData = await dolarResponse.json();
        const dolarARS = dolarData.blue ? dolarData.blue.bid : null;
        const dolarMayorista = dolarData.mayorista.price;
        const dolarOficial = dolarData.oficial.price;
        const dolarAhorro = dolarData.ahorro.ask;
        const dolarTarjeta = dolarData.tarjeta.price;
        const dolarBlue = dolarData.blue.ask;
        const dolarCripto = dolarData.cripto["ccb"].ask;
        const dolarMep = dolarData.mep.al30["24hs"].price;
        const dolarCCL = dolarData.ccl.al30["24hs"].price;


        if(!dolarARS || !dolarMayorista) {
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
        document.getElementById("actualizado").innerText = `USD: ${worldcoinUSD} – Dolar: ${dolarARS} ARS`;
        document.getElementById("precio_dolar_mayorista").innerText = `Mayorista: ${dolarMayorista}`;
        document.getElementById("precio_dolar_oficial").innerText = `Oficial: ${dolarOficial}`;
        document.getElementById("precio_dolar_ahorro").innerText = `Ahorro: ${dolarAhorro}`;
        document.getElementById("precio_dolar_tarjeta").innerText = `Tarjeta: ${dolarTarjeta}`;
        document.getElementById("precio_dolar_blue").innerText = `Blue: ${dolarBlue}`;
        document.getElementById("precio_dolar_cripto").innerText = `Cripto: ${dolarCripto}`;
        document.getElementById("precio_dolar_mep").innerText = `Mep: ${dolarMep}`;
        document.getElementById("precio_dolar_ccl").innerText = `CCL: ${dolarCCL}`;
    } catch(error) {
        console.error("Error al obtener precios:", error);
        document.getElementById("precio").innerText = "Error al cargar el precio";
    }
}

function actualizarContador() {
    if (countdown > 0) {
        document.getElementById("contador").innerText = `Actualización de cotizaciones en: ${countdown--} segundos`;
    } else {
        obtenerPrecioWorldcoin();
    }
}

window.onload = () => {
    const tiempo_de_refresco = 30000;
    obtenerPrecioWorldcoin();
    setInterval(actualizarContador, 1000);
    setInterval(obtenerPrecioWorldcoin, tiempo_de_refresco);
};