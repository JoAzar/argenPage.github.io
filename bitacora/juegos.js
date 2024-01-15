const emojis = ["🐖", "🐖", "🐐", "🐐", "🐘", "🐘", "🐇", "🐇", "🦔", "🦔", "🦥", "🦥", "🐈", "🐈", "🦌", "🦌"];
let cont = 0;

function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
  }

var random_emojis = shuffleArray(emojis);


function reiniciarJuego() {

    document.querySelector('.juego').innerHTML = "";
    document.querySelector('.contador').textContent = "Parejas encontradas: 0";
    cont = 0;
    random_emojis = shuffleArray(emojis);

    for (let i = 0; i < random_emojis.length; i++) {
        const box = document.createElement('div');
        const box2 = document.createElement('div');
        box2.className = 'contador';
        box.className = 'item';
        box.innerHTML = random_emojis[i];

        box.onclick = function () {
            this.classList.add('boxOpen');
            setTimeout(function () {
                if (document.querySelectorAll('.boxOpen').length > 1) {
                    if (document.querySelectorAll('.boxOpen')[0].innerHTML == document.querySelectorAll('.boxOpen')[1].innerHTML) {
                        document.querySelectorAll('.boxOpen')[0].classList.add('boxMatch');
                        document.querySelectorAll('.boxOpen')[1].classList.add('boxMatch');
                        cont++;
                        document.querySelector('.contador').textContent = "Parejas encontradas: " + cont;
                        document.querySelectorAll('.boxOpen')[1].classList.remove('boxOpen');
                        document.querySelectorAll('.boxOpen')[0].classList.remove('boxOpen');

                        if (document.querySelectorAll('.boxMatch').length == emojis.length) {
                            document.querySelector('.juego').innerHTML = "";
                            document.querySelector('.contador').textContent = "Parejas encontradas: " + cont;
                            const mensajeGanaste = document.getElementById('mensajeGanaste');
                            mensajeGanaste.textContent = "¡¡GANASTE!! Felicitaciones";
                            mensajeGanaste.classList.remove('oculto');
                        }
                    }

                    if(cont <= -10) {
                        document.querySelector('.juego').innerHTML = "";
                        document.querySelector('.contador').textContent = "Parejas encontradas: " + cont;
                        const mensajeGanaste = document.getElementById('mensajeGanaste');
                        mensajeGanaste.textContent = "Perdiste, ¡vuelve a intentarlo!";
                        mensajeGanaste.classList.remove('oculto');
                    } 

                    else {
                        document.querySelectorAll('.boxOpen')[1].classList.remove('boxOpen');
                        document.querySelectorAll('.boxOpen')[0].classList.remove('boxOpen');
                        cont--;
                        document.querySelector('.contador').textContent = "Parejas encontradas: " + cont;
                    }
                }
            }, 500);
        }

        document.querySelector('.juego').appendChild(box);
    }
}

document.addEventListener("DOMContentLoaded", function () {
    reiniciarJuego();
});