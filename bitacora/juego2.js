var contenedor;
var time;
var deltaTime = 0;
var score = 0;
var manzanas = 0;
var banana = 0;
var sandia = 0;
var textoScore;
var textomanzana;
var gameOver;
var saltando = false;
var parado = false;
var impulso = 650;
var gravedad = 2500;
var suelo;
var sueloX = 0;
var sueloY = 27;
var velEscenario = 1280/3;
var velY = 0;
var gameVel = 1;
var cerdo;
var cerdoPosX = 42;
var cerdoPosY = sueloY;
var obstaculos = [];
var tiempoHastaObstaculo = 2;
var tiempoObstaculoMin = 0.7;
var tiempoObstaculoMax = 1.8;
var obstaculoPosY = 16;
var tiempoHastamanzana = 3;
var tiempomanzanaMin = 0.9;
var tiempomanzanaMax = 3.5;
var manzanaMinY = 20;
var manzanaMaxY = 100;
var tiempoHastabanana = 4;
var tiempobananaMin = 0.14;
var tiempobananaMax = 4.5;
var bananaMinY = 20;
var bananaMaxY = 100;
var tiempoHastasandia = 5;
var tiemposandiaMin = 0.20;
var tiemposandiaMax = 5.5;
var sandiaMinY = 20;
var sandiaMaxY = 100;
var interactuables = [];
var nombre = [];
var tiempoCabraObstaculoMin = 6;
var tiempoCabraObstaculoMax = 12;
var obstaculoCabraPosY = 16;
var colisionRegistrada;
var vidas = 4;              /* cant de vidas iniciales */
var detecto = 0;
var reiniciarJuego;

if(document.readyState === "complete" || document.readyState === "interactive") {
  setTimeout(Init,1);
} else {
  document.addEventListener("DOMContentLoaded", Init);
}

function Init() {
  time = new Date();
  start();
  Loop();
}

function Loop() {
  deltaTime = (new Date() - time) /1000;
  time = new Date();
  update();
  requestAnimationFrame(Loop);
}

function start() {
  gameOver = document.querySelector(".game-over");
  suelo = document.querySelector(".suelo");
  contenedor = document.querySelector(".contenedor");
  textoScore = document.querySelector(".puntosNum");
  textomanzana = document.querySelector(".manzanaVal");
  textobanana = document.querySelector(".bananaVal");
  textosandia = document.querySelector(".sandiaVal");
  textovida = document.querySelector(".textovida");
  textonombre = document.querySelector(".name");
  cerdo = document.querySelector(".cerdo");
  document.addEventListener("keydown", handleKeyDown);
  reiniciarJuego = document.querySelector(".nuevoJuego");
}

function update() {
  if(parado) return;
  moverCerdo();
  moverSuelo();
  decidirCrearObstaculos();
  moverObstaculo();
  DecidirCrearmanzanas();
  DecidirCrearbanana();
  DecidirCrearsandia(); 
  MoverInteractuables();
  detectarColisionmanzanas();  
  detectarColision();
  velY -= gravedad * deltaTime;
}

function handleKeyDown(ev) {
  if(ev.keyCode==32)
  {
    saltar();
  }
}

function saltar() {
  if(cerdoPosY === sueloY) {
    saltando = true;
    velY = impulso;
    cerdo.classList.remove("cerdoMovement");
  }
}

function moverCerdo() {
  cerdoPosY += velY*deltaTime;
  if(cerdoPosY < sueloY) {
    tocarSuelo();
  }
  cerdo.style.bottom = cerdoPosY+"px";
}

function moverSuelo() {
  sueloX += calcularDesplazamiento();
  suelo.style.left = -(sueloX % contenedor.clientWidth)+"px";
}

function calcularDesplazamiento() {
  return velEscenario * deltaTime * gameVel;
}

function estrellarse() {
  cerdo.classList.remove("cerdoMovement");
  cerdo.classList.add("cerdoMuerte");
  parado = true;
}

function tocarSuelo() {
  cerdoPosY = sueloY;
  velY = 0;
  if(saltando) {
    cerdo.classList.add("cerdoMovement");
  }
  saltando = false;
}

function decidirCrearObstaculos() {
  tiempoHastaObstaculo -= deltaTime;
  if(tiempoHastaObstaculo<=0) {
    crearObstaculo();
  }
}

function DecidirCrearmanzanas() {
  tiempoHastamanzana -= deltaTime;
  if(tiempoHastamanzana <= 0) {
      Crearmanzana();
  }
}

function Crearmanzana() {
  var manzana = document.createElement("div");
  contenedor.appendChild(manzana);
  manzana.classList.add("manzana");
  manzana.posX = contenedor.clientWidth;
  manzana.style.left = contenedor.clientWidth+"px";
  manzana.style.bottom = manzanaMinY + (manzanaMaxY - manzanaMinY) * Math.random() + "px";
  interactuables.push(manzana);
  tiempoHastamanzana = tiempomanzanaMin + Math.random() * (tiempomanzanaMax-tiempomanzanaMin) / gameVel;
}

function DecidirCrearbanana() {
  tiempoHastabanana -= deltaTime;
  if(tiempoHastabanana <= 0) {
      Crearbanana();
  }
}
function Crearbanana() {
  var banana = document.createElement("div");
  contenedor.appendChild(banana);
  banana.classList.add("banana");
  banana.posX = contenedor.clientWidth;
  banana.style.left = contenedor.clientWidth+"px";
  banana.style.bottom = bananaMinY + (bananaMaxY - bananaMinY) * Math.random() + "px";

  interactuables.push(banana);
  tiempoHastabanana = tiempobananaMin + Math.random() * (tiempobananaMax-tiempobananaMin) / gameVel;
}
function DecidirCrearsandia() {
  tiempoHastasandia -= deltaTime;
  if(tiempoHastasandia <= 0) {
      Crearsandia();
  }
}

function Crearsandia() {
  var sandia = document.createElement("div");
  contenedor.appendChild(sandia);
  sandia.classList.add("sandia");
  sandia.posX = contenedor.clientWidth;
  sandia.style.left = contenedor.clientWidth+"px";
  sandia.style.bottom = sandiaMinY + (sandiaMaxY - sandiaMinY) * Math.random() + "px";

  interactuables.push(sandia);
  tiempoHastasandia = tiemposandiaMin + Math.random() * (tiemposandiaMax-tiemposandiaMin) / gameVel;
}

function crearObstaculo() {
  var obstaculo = document.createElement("div");
  contenedor.appendChild(obstaculo);
  obstaculo.classList.add("puercoespin");  
  if(Math.random() > 0.5); obstaculo.classList.add("puercoespin"); 
  obstaculo.posX = contenedor.clientWidth;
  obstaculo.style.left = contenedor.clientWidth+"px";
  obstaculos.push(obstaculo);
  tiempoHastaObstaculo = tiempoObstaculoMin + Math.random()*(tiempoObstaculoMax-tiempoObstaculoMin)/gameVel;
}

function moverObstaculo() {
  for(var i = obstaculos.length-1; i>=0; i--) {
    if(obstaculos[i].posX < -obstaculos[i].clientWidth) {
      obstaculos[i].parentNode.removeChild(obstaculos[i]);
      obstaculos.splice(i,1);
      ganarPuntos();
    } else {
      obstaculos[i].posX -= calcularDesplazamiento();
      obstaculos[i].style.left = obstaculos[i].posX+"px"; 
    }
  }
}

function MoverInteractuables() {
  for (var i = interactuables.length - 1; i >= 0; i--) {
    if(interactuables[i].posX < -interactuables[i].clientWidth) {
        interactuables[i].parentNode.removeChild(interactuables[i]);
        interactuables.splice(i, 1);
    } else {
        interactuables[i].posX -= calcularDesplazamiento();
        interactuables[i].style.left = interactuables[i].posX+"px";
    }
  }
}

function ganarPuntos() {
  score++;
  textoScore.innerText = score;
  
  if(score == 1){
    gameVel = 1;
    contenedor.classList.add("mediodia");
  }else if(score == 10) {
    gameVel = 1.3;
    contenedor.classList.add("tarde");
  } else if(score == 20) {
    gameVel = 1.5;
    contenedor.classList.add("noche");
  }
  else if(score == 30) {
    gameVel = 2;
    contenedor.classList.add("infierno")
  }
  suelo.style.animationDuration = (3/gameVel)+"s"; /*agregado*/
}

function ganarmanzanas(){
  manzanas++;
  textomanzana.innerText= manzanas;
  suelo.style.animationDuration = (3/gameVel)+"s";/*agregado*/
}
function ganarbanana(){
  banana++;
  textobanana.innerText = banana;
  suelo.style.animationDuration = (3/gameVel)+"s";    /*agregado*/
}
  function ganarsandia(){
  sandia++;
  textosandia.innerText = sandia;
  suelo.style.animationDuration = (3/gameVel)+"s";    /*agregado*/
}

function GameOver() {
  estrellarse();
  gameOver.style.display = "flex";
  reiniciarJuego.addEventListener('click', reiniciarjuego);
}

// Función para reiniciar el juego
function reiniciarjuego() {
  // Restablecer todas las variables del juego a sus valores iniciales
  time = new Date();
  score = 0;
  manzanas = 0;
  banana = 0;
  sandia = 0;
  vidas = 4;
  colisiones = 0;
  eliminarTodosLosObstaculos();
  eliminarTodosLosInteractuables();
  textoScore.innerText = score;
  textomanzana.innerText = manzanas;
  textobanana.innerText = banana;
  textosandia.innerText = sandia;
  textovida.innerText = vidas;
  suelo.style.animationDuration = "3s";
  cerdoPosY = sueloY;
  cerdo.style.bottom = cerdoPosY + "px";
  cerdo.classList.remove("cerdoMuerte");
  cerdo.classList.add("cerdoMovement");
  gameOver.style.display = "none";
  parado = false;
  Loop();
}


// Funciones para eliminar todos los obstáculos e interactuables
function eliminarTodosLosObstaculos() {
  for (var i = obstaculos.length - 1; i >= 0; i--) {
    obstaculos[i].parentNode.removeChild(obstaculos[i]);
    obstaculos.splice(i, 1);
  }
}

function eliminarTodosLosInteractuables() {
  for (var i = interactuables.length - 1; i >= 0; i--) {
    interactuables[i].parentNode.removeChild(interactuables[i]);
    interactuables.splice(i, 1);
  }
}

// Función para restar una vida
function restarVida() {
  if (vidas > 0) {
    vidas--;
    actualizarVidas(); // Actualiza la cantidad de vidas en pantalla
  }
}

function actualizarVidas() {
  textovida.innerText = vidas;
}

function detectarColision() {
  for (var i = 0; i < obstaculos.length; i++) {
    if (obstaculos[i].posX > cerdoPosX + cerdo.clientWidth) {
      break;
    } else {
      if (IsCollision(cerdo, obstaculos[i], 10, 30, 15, 20)) {
        eliminarObstaculo(i);                                     // Llama a una función para eliminar el obstáculo
        restarVida();                                             // Resta una vida si vidas > 0
        if (vidas === 0) {
          GameOver();
        }
      }
    }
  }
}

// Función para eliminar un obstáculo específico
function eliminarObstaculo(index) {
  if (index >= 0 && index < obstaculos.length) {
    obstaculos[index].parentNode.removeChild(obstaculos[index]);  // Elimina del DOM
    obstaculos.splice(index, 1);                                  // Elimina de la lista de obstáculos
  }
}


function detectarColisionmanzanas() {
  for (var i = 0; i < interactuables.length; i++) {
      
      if(IsCollision(cerdo, interactuables[i], 10, 25, 10, 20)) {
        
          if(interactuables[i].classList.contains("manzana")){
              interactuables[i].parentNode.removeChild(interactuables[i]);
              interactuables.splice(i, 1);
              ganarmanzanas();
          }else if (interactuables[i].classList.contains("banana")){
              interactuables[i].parentNode.removeChild(interactuables[i]);
              interactuables.splice(i, 1);
              ganarbanana();
          } else if (interactuables[i].classList.contains("sandia")){
            interactuables[i].parentNode.removeChild(interactuables[i]);
            interactuables.splice(i, 1);
            ganarsandia();
          } 
        }
      }
}

function IsCollision(a, b, paddingTop, paddingRight, paddingBottom, paddingLeft) {
  var aRect = a.getBoundingClientRect();
  var bRect = b.getBoundingClientRect();

  return !(
      ((aRect.top + aRect.height - paddingBottom) < (bRect.top)) ||
      (aRect.top + paddingTop > (bRect.top + bRect.height)) ||
      ((aRect.left + aRect.width - paddingRight) < bRect.left) ||
      (aRect.left + paddingLeft > (bRect.left + bRect.width))
  );
}