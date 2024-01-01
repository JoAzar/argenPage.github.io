<?php include '../rutas.php'; ?> 

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Mouse</title>
		<link rel="stylesheet" href="../styles/style.css">
	</head>
	<body>
		
	</body>
		<header class="fondoRosa">
			<h1 class="sombraNegra letraBlanca">Mouse</h1>
		</header>
		<nav class="navDesplegable fondoBlanco dropSombraNegra">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon" onclick="location.href='<?php echo iniciol ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajesr as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraRosaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraRosaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Hardware</h1>
					<ul class="submenu">
						<?php foreach ($hardware as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraRosaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraRosaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
		<main class="blanco contenedorTransparente">
			<h2 class="letraRosa tamanioGran subrayado">Mouses</h2><img class="encuadrar bordeRosa radius cajaSombraNegra" src="../images/mouse.jpeg">
			<p class="contenedorTransparente radius cajaSombraNegra fondoNegroSuave">
				<b class="letraRosa sombraNegra tamanioGran textoFino dropSombraNegra">Curiosidad acerca de los mouses</b><br>
				<br><b class="letraBlanca sombraNegra">El término "ratón" para referirse al dispositivo de entrada se popularizó gracias a su inventora, Douglas Engelbart, que desarrolló el primer prototipo de ratón en la década de 1960 mientras trabajaba en el Stanford Research Institute. La razón por la que lo llamó "ratón" se debe a que el cable que salía del dispositivo se asemejaba a la cola de un ratón. Engelbart eligió este nombre de manera informal y coloquial.

				En la demostración pública del sistema de interacción de computadoras que Engelbart presentó el 9 de diciembre de 1968, se utilizaron dos dispositivos de señalización, uno de los cuales era el primer ratón. Este evento fue un hito importante en la historia de la informática, ya que también incluyó la primera demostración pública de la navegación hipertextual y la videoconferencia.

				Desde entonces, el término "ratón" se ha vuelto estándar para referirse a este dispositivo de entrada en el mundo de la informática. Es interesante cómo un nombre informal y descriptivo llegó a ser la designación común para un componente tan esencial en nuestras computadoras.</b><br>
			</p>
	        
	        <div class="linea-centrada"></div>
		</main>
		<footer class="fondoNegro textoSerio letraBlanca">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonRosa" onclick="location.href='<?php $ruta18 ?>'">Subir</button>
    	</footer>
	</body>
</HTML>