<?php include '../rutas.php'; ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Klak</title>
		<link rel="stylesheet" href="../styles/style.css">
	</head>
	<body>
		
	</body>
		<header class="fondoNegroSuave">
			<h1 class="tamanioGran textoChanga letraCeleste sombraNegra dropSombraBlanca">Klak</h1>
		</header>
		<nav class="navDesplegable fondoBlanco dropSombraBlanca">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon" onclick="location.href='<?php echo iniciol ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajes as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraCelesteHover dropSombraNegraHover sombraNegraHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio textoSerio letraCelesteHover dropSombraNegraHover sombraNegraHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio textoSerio letraCelesteHover dropSombraNegraHover sombraNegraHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio textoSerio letraCelesteHover dropSombraNegraHover sombraNegraHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
		<main class="fondoConImagenKlak">
			<h1 class="tamanioGran textoChanga letraCeleste sombraNegra margen2 subrayado fondoVidrio padding2">Insertar Component Defalut-mode / Dark-Mode</h2>
			<div class="fondoVidrio padding2 radius">
				<div class="radius fondoConImagenKlak2 encuadrarMedio"></div>

			</div>

	        <div class="linea-centrada"></div><br>
		</main>
		<footer class="fondoNegro dropSombraNegra letraBlanca sombraNegra textoChanga">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonCeleste dropSombraBlancaHover" onclick="location.href='klak'">Subir</button>
    	</footer>
	</body>
</HTML>