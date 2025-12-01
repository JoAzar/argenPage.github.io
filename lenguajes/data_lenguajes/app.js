import { animateText } from './modulo_animacion.js'; 
import { animateSVG } from './modulo_animacion.js';

document.querySelector('button').addEventListener('click', animateText);
document.querySelector('svg').addEventListener('click', animateSVG);
