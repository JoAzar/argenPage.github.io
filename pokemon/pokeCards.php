<?php include '../rutas.php'; ?>
<?php include 'pokemon.php'; ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>PokeCards</title>
		<link rel="stylesheet" href='<?php echo ruta0 ?>'>            
	</head>
	<body>
		
	</body>
		<header class="fondoAzul" >
			<h1 class="letraAmarilla sombraNegra textoChanga dropSombraNegra ">Poke-Cards</h1>
			<div class="avanzarLargo pausarHover"><img class="girar pausarHover" src="img/pokeball.png"></div>
		</header>
		
		<nav class="navDesplegable fondoBlanco dropSombraBlanca">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon2" onclick="location.href='<?php echo iniciol ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajes as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				
				</li>
				<li>
					<h1 class="nav1 textoSerio">Bitácora</h1>
					<ul class="submenu">
						<?php foreach ($bitacorar as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Hardware</h1>
					<ul class="submenu">
						<?php foreach ($hardwarer as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Hacking</h1>
					<ul class="submenu">
						<?php foreach ($hackingr as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio" onclick="location.href='<?php echo nosotrosl ?>'">Acerca de</h1>
				</li>
			</ul>
		</nav>

		<main class="fondoConImagenBosque3">
			<div class="margen2">
				<select class="padding1 fondoBlanco radius bordeVidrio textoChanga tamaniopeq" name="Pokemons" onchange="filtrarPokemons(this.value)">
					<option onclick="location.href='pokeCards.php'">Seleccione un tipo de pokemon</option>
					<option value="fire.png">Fuego</option>
					<option value="water.png">Agua</option>
					<option value="ice.png">Hielo</option>
					<option value="electric.png">Electrico</option>
					<option value="normal.png">Normal</option>
					<option value="psyquic.png">Psiquico</option>
					<option value="ghost.png">Fantasma</option>
					<option value="dark.png">Oscuridad</option>
					<option value="fairy.png">Hada</option>
				</select>
			<div>

			<div class="horizontal flex widMax90 fondoVidrio margen2 dropSombraBlanca espacioEntreEllos radius">
			<?php foreach($pokeArray as $pokemon) { ?>
				<?php echo $pokemon ?>
			<?php } ?>
			
			</div>
		</main>
		<footer class="fondoNegro textoSerio letraBlanca dropSombraNegra">
      		<p >©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonAmarillo" onclick="location.href='<?php echo 'pokeCards.php' ?>'">Subir</button>
    	</footer>
    	<script>
        function filtrarPokemons(tipoSeleccionado) {
            var cartas = document.getElementsByClassName('cartaPokemon');

            for (var i = 0; i < cartas.length; i++) {
                var carta = cartas[i];

                if (tipoSeleccionado === '' || carta.classList.contains(tipoSeleccionado)) {
                    carta.style.display = 'block';
                } else {
                    carta.style.display = 'none';
                }
            }
        }
    </script>
	</body>
</HTML>