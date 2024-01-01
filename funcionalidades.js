
function alerta() {
  alert("ESTÁS USANDO JS");
}

var padre = document.getElementById('padre');
var hijo = document.getElementById('hijo');

function toggleNewTextarea(event) {

    if (!hijo) {

        hijo = document.createElement('div');
        hijo.id = 'hijo';
        hijo.className = 'flex horizontal centrarCaja margen1 letraRoja tamaniopeq textoChanga sombraNegra';

        var newTextarea = document.createElement('textarea');
        newTextarea.name = 'comentario2';
        newTextarea.rows = '5';
        newTextarea.cols = '50';
        newTextarea.textContent = ' Write here';

        hijo.appendChild(newTextarea);
        padre.appendChild(hijo);
    }
    else if(hijo && event.target === padre) {
      padre.removeChild(hijo);
      hijo = null;
    }
}

padre.addEventListener('click', toggleNewTextarea);

//--------------------------------------------------------/

var padre2 = document.getElementById('padre2');
var hijo2 = document.getElementById('hijo2');

function newInput(event) {

    if (!hijo2) {
      hijo2 = document.createElement('div');
      hijo2.id = 'hijo2';

      var newInput = document.createElement('input');
      newInput.className = 'bordeAzulFinoFocus bordeCelesteFino radius altura3';
      newInput.name = 'nombre';
      newInput.size = '30';
      newInput.type = 'text';

      hijo2.appendChild(newInput);
      padre2.appendChild(hijo2);
    }
    else if(hijo2 && event.target === padre2) {
      padre2.removeChild(hijo2);
      hijo2 = null;
    }
}

padre2.addEventListener('click', newInput);

//--------------------------------------------------------/

var padre3 = document.getElementById('padre3');
var hijo3 = document.getElementById('hijo3');

function apellido(event) {

    if (!hijo3) {
      hijo3 = document.createElement('div');
      hijo3.id = 'hijo3';

      var apellido = document.createElement('input');
      apellido.className = 'bordeAzulFinoFocus bordeCelesteFino radius altura3';
      apellido.name = 'apellido';
      apellido.size = '30';
      apellido.type = 'text';

      hijo3.appendChild(apellido);
      padre3.appendChild(hijo3);
    }
    else if(hijo3 && event.target === padre3) {
      padre3.removeChild(hijo3);
      hijo3 = null;
    }
}

padre3.addEventListener('click', apellido);

//--------------------------------------------------------/

var padre4 = document.getElementById('padre4');
var hijo4 = document.getElementById('hijo4');

function email(event) {

    if (!hijo4) {
      hijo4 = document.createElement('div');
      hijo4.id = 'hijo4';

      var email = document.createElement('input');
      email.className = 'bordeAzulFinoFocus bordeCelesteFino radius altura3';
      email.name = 'email';
      email.size = '30';
      email.type = 'text';

      hijo4.appendChild(email);
      padre4.appendChild(hijo4);
    }
    else if(hijo4 && event.target === padre4) {
      padre4.removeChild(hijo4);
      hijo4 = null;
    }
}

padre4.addEventListener('click', email);

//--------------------------------------------------------/