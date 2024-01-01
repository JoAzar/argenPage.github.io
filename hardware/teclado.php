<?php include '../rutas.php'; ?> 

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>IAConversaciones</title>
		<link rel="stylesheet" href="../styles/style.css">
	</head>
	<body>
		
	</body>
		<header>
			<h1 class="letraBlanca sombraNegra dropSombraNegra">Teclado</h1>
		</header>
		<nav class="navDesplegable fondoNegroSuave dropSombraBlanca">
			<ul class="menu">
				<li>
					<h1 class="nav1 iconoAzul" onclick="location.href='<?php echo iniciol ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio letraBlanca">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajesr as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraBlanca sombraNegra letraEpicaHover letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				
				</li>
				<li>
					<h1 class="nav1 textoSerio letraBlanca">Bitácora</h1>
					<ul class="submenu">
						<?php foreach ($bitacorar as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraBlanca sombraNegra letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio letraBlanca">Hardware</h1>
					<ul class="submenu">
						<?php foreach ($hardware as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraBlanca sombraNegra letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio letraBlanca">Hacking</h1>
					<ul class="submenu">
						<?php foreach ($hackingr as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraBlanca sombraNegra letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio letraBlanca" onclick="location.href='<?php echo nosotrosl ?>'">Acerca de</h1>
				</li>
			</ul>
		</nav>
		<main>
			<h2 class="textoSerio letraBlanca tamanioGran subrayado">Teclado</h2>
			<img class="encuadrar bordeBlanco radius cajaSombraNegra" src="../images/teclado.jpeg">
			
			
	        
	        
		</main>
		<footer class="fondoNegro textoSerio letraBlanca">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonCeleste" onclick="location.href='<?php $ruta15 ?>'">Subir</button>
    	</footer>
	</body>
</HTML>