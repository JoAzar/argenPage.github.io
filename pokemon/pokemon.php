<?php

/**
 * clase pokemon abarca todos los Pokimons
 */

class Pokemons {
	
	private $nombre;
	private $tipo;
	private $debilidad;
	private $fortaleza;
	private $habitat;
	private $gen;
	private $objetoEvol = null;
	private $imagen;
	private $fondo;
	

	public function __construct(String $nombre, String $tipo, String $debilidad, String $fortaleza, String $habitat, String $gen, String $objetoEvol, String $imagen, String $fondo) {
		$this->nombre = $nombre;
		$this->tipo = $tipo;
		$this->debilidad = $debilidad;
		$this->fortaleza = $fortaleza;
		$this->habitat = $habitat;
		$this->gen = $gen;
		$this->objetoEvol = $objetoEvol;
		$this->imagen = $imagen;
		$this->fondo = $fondo;
	}

	public function __toString() {
return "<div class='cartaPokemon margen2 padding2 bordeVidrio {$this->tipo} {$this->fondo} textoSerio letraBlanca sombraNegra radius dropSombraNegra overflowAuto fondoVidrio'>
    		<div>
            	<div class='fondoVidrio letraBlanca radius growMaxHover'>{$this->nombre}</div>
            	<div class='fondoNegro dropSombraBlanca letraBlanca radius'><img class='wid20' src=\"img/{$this->tipo}\">
            	</div>
            	<div class='padding1 wid30 fondoNegro dropSombraBlanca letraBlanca radius growMaxHover margen1'>Debilidad: {$this->debilidad}</div>

            	<div class='padding1 wid30 fondoNegro dropSombraBlanca letraBlanca radius growMaxHover margen1'>Fortaleza: {$this->fortaleza}</div>

            	<div class='padding1 wid30 fondoNegro dropSombraBlanca letraBlanca radius growMaxHover margen1'>Hábitat: {$this->habitat}</div>

            	<div class='padding1 wid30 fondoNegro dropSombraBlanca letraBlanca radius growMaxHover margen1'>Generación: {$this->gen}</div>

            	<div class='padding1 wid30 fondoNegro dropSombraBlanca letraBlanca radius growMaxHover margen1'>Objeto Evolutivo: {$this->objetoEvol}</div>
            </div>
            <div>
            	<img class='grow1 flotar subirArriba10 agrandarImagen dropSombraNegra dropSombraBlancaHover' src=\"img/{$this->imagen}\">
            </div>
    	</div>";
	            	
	}
}

//PRINCIPAL PARA IMPRIMIR EN HTMLS
$pokemon1 = new Pokemons('Articuno','ice.png','Fire','Planta', 'Montañas','1ra gen','Ninguno','articuno.gif', 'fondoConImagenNevado');

$pokemon2 = new Pokemons('Ivisaur', 'grass.png', 'Fuego','Agua', 'Bosque','1ra gen','Ninguno','ivisaur.gif', 'fondoConImagenBosque2');

$pokemon3 = new Pokemons('Blastoirse', 'water.png', 'Electrico','Fuego','Oceano','1ra gen','Ninguno','blastoirse.gif', 'fondoConImagenOceano');

$pokemon4 = new Pokemons('Snorlax', 'normal.png','Roca','Psyquico', 'Bosque','1ra gen','Ninguno','snorlax.gif', 'fondoConImagenBosque');

$pokemon5 = new Pokemons('Mew', 'psyquic.png', 'Fantasma','Veneno','Bosque','1ra gen','Ninguno','mew.gif', 'fondoConImagenBosque');

$pokemon6 = new Pokemons('Cyndaquil', 'fire.png', 'Agua','Planta', 'Volcan','1ra gen','Ninguno','cyndaquil.gif', 'fondoConImagenLava');

$pokemon7 = new Pokemons('Hunter', 'ghost.png', 'Ninguno','Ninguno', 'Tenebroso','1ra gen','Ninguno','hunter.gif', 'fondoConImagenBosque');

$pokemon8 = new Pokemons('Gengar', 'ghost.png', 'Ninguno','Ninguno', 'Tenebroso','1ra gen','Ninguno','gengar.gif', 'fondoConImagenTenebroso');

$pokemon9 = new Pokemons('Pikachu', 'electric.png', 'Roca','Agua','Bosque','1ra gen','Piedra trueno','pikachu.gif', 'fondoConImagenBosque3');

$pokemon10 = new Pokemons('Charizard', 'fire.png', 'Roca','Planta','Volcan','1ra gen','Ninguno','charizard.gif', 'fondoConImagenLava');

$pokemon11 = new Pokemons('Arcanine', 'fire.png', 'Roca','Planta','Volcan','1ra gen','Ninguno','arcanine.gif', 'fondoConImagenLava2');

$pokemon12 = new Pokemons('Corsola', 'water.png', 'Planta','Fuego','Oceano','1ra gen','Ninguno','corsola.gif', 'fondoConImagenOceano');

$pokemon13 = new Pokemons('Chikorita', 'water.png', 'Fuego','Agua','Bosque','1ra gen','Ninguno','chikorita.gif', 'fondoConImagenBosque2');

$pokemon14 = new Pokemons('Banette', 'ghost.png', 'Psyquico','Ninguno','Bosque Oscuro','1ra gen','Ninguno','banette.gif', 'fondoConImagenTenebroso2');

$pokemon15 = new Pokemons('Rapitash', 'fire.png', 'Agua','Planta','Volcan','1ra gen','Ninguno','rapitash.gif', 'fondoConImagenLava2');

$pokemon16 = new Pokemons('Umbreon', 'dark.png', 'Psyquico','Fantasma','Ciudad','1ra gen','Noche','umbreon.gif', 'fondoConImagenTenebroso');

$pokemon17 = new Pokemons('Cubone', 'ground.png', 'Agua','Roca','Montaña','1ra gen','Ninguno','cubone.gif', 'fondoConImagenBosque');

$pokemon18 = new Pokemons('Entei', 'fire.png', 'Agua','Planta','Ciudad','1ra gen','Ninguno','entei.gif', 'fondoConImagenTenebroso');

$pokemon19 = new Pokemons('kyogre', 'water.png', 'Electrico','Fuego','Oceano','1ra gen','Ninguno','kyogre.gif', 'fondoConImagenOceano');

$pokemon20 = new Pokemons('Vaporeon', 'water.png', 'Fuego','Electrico','Oceano','1ra gen','Ninguno','vaporeon.gif', 'fondoConImagenOceano');

$pokemon21 = new Pokemons('Glaceon', 'ice.png', 'Fuego','Planta','Montañas','1ra gen','Ninguno','glaceon.gif', 'fondoConImagenNevado2');

$pokemon22 = new Pokemons('Greninja', 'water.png', 'Electrico','Fuego','Oceano','1ra gen','Ninguno','greninja.gif', 'fondoConImagenOceano');

$pokemon23 = new Pokemons('Shinx', 'electric.png', 'Roca','Agua','bosque','1ra gen','Ninguno','shinx.gif', 'fondoConImagenBosque4');

$pokemon24 = new Pokemons('Sylveon', 'fairy.png', 'Ghost','Psyquico','Bosque','1ra gen','Ninguno','sylveon.gif', 'fondoConImagenMistica');

$pokeArray = [$pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, $pokemon6, $pokemon7, $pokemon8, $pokemon9, $pokemon10, $pokemon11, $pokemon12, $pokemon13, $pokemon14, $pokemon15, $pokemon16, $pokemon17, $pokemon18, $pokemon19, $pokemon20, $pokemon21, $pokemon22, $pokemon23, $pokemon24];




?>