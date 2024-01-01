<?php include 'rutas.php';?>



<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Inicio</title>
		<link rel="stylesheet" href="<?php echo rutar0 ?>">
	</head>
	<body>

	</body>
		<header class="fondoAzul">
			<h1 class="textoSerio tamanioGran sombraNegra letraBlanca">Bienvenido a ArgenPage</h1>
			<div class="avanzarLargo">
				<a class="letraBlanca sombraNegra" href="pokemon/pokeCards.php">¡Catch them all!</a>	
				<img class="girar" src="pokemon/img/pokeball.png">
			</div>
		</header>
		<nav class="navDesplegable fondoBlanco dropSombraNegra">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon" onclick="location.href='<?php echo inicio ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajesl as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Bitácora</h1>
					<ul class="submenu">
						<?php foreach ($bitacoral as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" src="icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Hardware</h1>
					<ul class="submenu">
						<?php foreach ($hardwarel as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" src="icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Hacking</h1>
					<ul class="submenu">
						<?php foreach ($hackingl as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio" onclick="location.href='<?php echo nosotros ?>'">Acerca de</h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio" onclick="location.href='<?php echo form ?>'">Formulario</h1>
				</li>
			</ul>
		</nav>
		<main>
			<h2 class="letraEpica subrayado textoSerio flash tamanioGran">¿Qué, cómo, cuándo y dónde?</h2>
			<p>
				<b class="letraEpica textoFino tamanioMed">¿Qué es Argenpage?</b><b class="letraCeleste textoFino tamanioMed"> Es un almacenamiento de código explicado y simplificado</b><br>
		    </p>
		    <p>
		        <b class="letraEpica textoFino tamanioMed">¿En qué se diferencia de otras learning pages?</b><b class="letraCeleste textoFino tamanioMed"> Es una fuente de código directo con una explicación resumida pensada para profesionales que ya conocen del tema y sólo precisan recordar fragmentos específicos de código</b><br>
		    </p>
		    <p>
		        <b class="letraEpica textoFino tamanioMed">¿Cómo buscar?</b><b class="letraCeleste textoFino tamanioMed"> La página busca máximizar recursos y eficiencia por lo que la mejor opción es -> Ctrl + F (no, acá no hay buscador interno, ¿para qué?)</b><br>
		    </p>
		    <p>
		        <b class="letraEpica textoFino tamanioMed">¿Qué hago si no se qué busco?</b><b class="letraCeleste textoFino tamanioMed"> Recorré toda la página hasta encontrar algo que te sirva o interese</b><br>
		    </p>
		</main>
		<footer class="fondoNegro letraBlanca textoSerio">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonNaranjetaHover" onclick="location.href='<?php echo inicio ?>'">Subir</button>
    	</footer>
	</body>
	<script src="funcionalidades.js"></script>
</HTML>