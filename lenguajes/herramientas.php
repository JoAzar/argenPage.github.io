<?php include '../rutas.php'; ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>[ Tools ]</title>
		<link rel="stylesheet" href="../styles/style.css">
	</head>
	<body>
		
	</body>
		<header>
			<h1>Tools</h1>
		</header>
		<nav class="navDesplegable fondoBlanco">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon" onclick="location.href='<?php echo iniciol ?>'"></h1>
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
		<main>
			<h2 class="subrayado letraEpica tamanioGran">Links de herramientas</h2>
			<p>
				<h3 class="link textoSerio letraBlanca tamanioMed" onclick="location.href='https://pypi.org/project/mvt/'">MVT Mobile Verification Toolkit</h3><br>
				<br><h3 class="link textoSerio letraBlanca tamanioMed" onclick="location.href='https://es.wikipedia.org/wiki/Comandos_Bash'">Bash full commands</h3>
				<br><h3 class="link textoSerio letraBlanca tamanioMed" onclick="location.href='https://www.flaticon.es/'">Descarga de iconos</h3>
				<br><h3 class="link textoSerio letraBlanca tamanioMed" onclick="location.href='https://www.virustotal.com/gui/home/upload'">Virus total</h3>
				<br><h3 class="link textoSerio letraBlanca tamanioMed" onclick="location.href='https://grabify.link/'">IP Logger</h3>
				<br><h3 class="link textoSerio letraBlanca tamanioMed" onclick="location.href='https://emojiterra.com/es/'">Emojis</h3>
				<br><h3 class="link textoSerio letraBlanca tamanioMed" onclick="location.href='https://www.iloveimg.com/es/recortar-imagen/recortar-png'">Recortar imagenes</h3>
				<br><h3 class="link textoSerio letraBlanca tamanioMed" onclick="location.href='https://lookup.icann.org/en'">Escanear IP</h3>
			</p>
		</main>
		<footer class="fondoNegro textoSerio letraBlanca">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button onclick="location.href='bash.php'">Subir</button>
    	</footer>
	</body>
</HTML>