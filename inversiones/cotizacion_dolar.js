

async function obtenerPrecioWorldcoin() {
    try {
        const dolarResponse = await fetch('https://criptoya.com/api/dolar');
        const dolarData = await dolarResponse.json();
        const dolar_mayorista = dolarData.mayorista ? dolarData.mayorista.bid : null;
        const dolar_oficial = dolarData.oficial ? dolarData.oficial.bid : null;
        const dolar_ahorro = dolarData.ahorro ? dolarData.ahorro.bid : null;
        const dolar_tarjeta = dolarData.tarjeta ? dolarData.tarjeta.bid : null;
        const dolar_blue = dolarData.blue ? dolarData.blue.bid : null;
        const dolar_cripto = dolarData.cripto ? dolarData.cripto.bid : null;
        const dolar_mep = dolarData.mep ? dolarData.mep.bid : null;
        const dolar_ccl = dolarData.ccl ? dolarData.ccl.bid : null;

        if(!(dolar_mayorista || dolar_oficial || dolar_ahorro || dolar_tarjeta || dolar_blue || dolar_cripto || dolar_mep || dolar_ccl)) {
            console.error('No se pudo obtener el valor del dólar');
            document.getElementById("precio").innerText = "Error al obtener el valor del dólar";
            return;
        }
    }
}