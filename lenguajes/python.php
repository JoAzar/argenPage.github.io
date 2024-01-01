<?php include '../rutas.php'; ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Python</title>
		<link rel="stylesheet" href="../styles/style.css">
	</head>
	<body>
		
	</body>
		<header class="fondoAzul">
			<h1 class="letraAmarilla textoPixel dropSombraBlanca avanzarLargo">Python</h1>
		</header>
		<nav class="navDesplegable fondoAmarillo dropSombraBlanca">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon" onclick="location.href='<?php echo iniciol ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajes as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraAzulHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraAzulHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraAzulHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraAzulHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
		<main class="fondoConImagen3">
			<h1 class="textoPixel letraAmarilla sombraNegra margen2 tamanioGran subrayado letraColores1Hover">¿Cómo comenzar?</h1>
			<div class="flex horizontal">
				<div class="fondoBlancoTransparente padding2 margen2 radius">
					<h1 class="textoPixel letraBlanca sombraNegra tamanioMed padding2 subrayado subirCorto">Color de letras</h1>
					<b class="textoSerio letraBlanca tamaniopeq sombraNegra">
						rojo = '\033[91m'<br>
						verde = '\033[92m'<br>
						amarillo = '\033[93m'<br>
						resetColor = '\033[0m'<br>
						magenta = '\033[95m'<br>
						azul = '\033[94m'<br>
						Cian = \033[96m<br>
						colorDelBash = \033[97m<br>
						Negrita = \033[1m<br>
						Subrayado = \033[4m<br>
						Destacado = \033[7m
					</b>
				</div>

				<div class="fondoBlancoTransparente padding2 radius margen2">
					<h1 class="textoPixel letraBlanca sombraNegra tamanioMed padding2 subrayado">Color de letras</h1>
					<b class="textoSerio letraBlanca tamaniopeq sombraNegra">
						rojo = '\033[91m'<br>
						verde = '\033[92m'<br>
						amarillo = '\033[93m'<br>
						resetColor = '\033[0m'<br>
						magenta = '\033[95m'<br>
						azul = '\033[94m'<br>
						Cian = \033[96m<br>
						colorDelBash = \033[97m<br>
						Negrita = \033[1m<br>
						Subrayado = \033[4m<br>
						Destacado = \033[7m
					</b>
				</div>

				<div class="radius ocultarSobra encuadrarPeq dropSombraNegra">
					<div class="girarHover fondoAzul dropSombraBlanca">
						<div class="fondoNegro radius girarInversoHover bordeNegroTransparente margen0">
							<div class="fondoNegro radius margen2">

								<h1 class="textoPixel letraBlanca sombraNegra tamanioMed padding2 subrayado growHover letraAmarillaHover">TARJETA EXPERIMENTAL N°1</h1>
								<b class="textoSerio letraBlanca tamaniopeq sombraNegra">
									rojo = '\033[91m'<br>
									verde = '\033[92m'<br>
									amarillo = '\033[93m'<br>
									resetColor = '\033[0m'<br>
									magenta = '\033[95m'<br>
									azul = '\033[94m'<br>
									Cian = \033[96m<br>
									colorDelBash = \033[97m<br>
									Negrita = \033[1m<br>
									Subrayado = \033[4m<br>
									Destacado = \033[7m
								</b>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			
		</main>
		<footer class="letraAmarilla fondoNegroSuave dropSombraNegra sombraNegra textoPixel">
      		<p class="pie">©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonAmarillo bordeNegro radius dropSombraBlancaHover" onclick="location.href='<?php echo $ruta3 ?>'">Subir</button>
    	</footer>
	</body>
</HTML>