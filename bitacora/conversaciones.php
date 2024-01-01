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
		<header class="fondoVioleta">
			<h1 class="letraVioleta textoNova dropSombraNegra letraBlanca">Conversaciones con IA</h1>
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
								<h1 class="textoSerio letraVioletaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				
				</li>
				<li>
					<h1 class="nav1 textoSerio">Bitácora</h1>
					<ul class="submenu">
						<?php foreach ($bitacora as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraVioletaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraVioletaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraVioletaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
		<main class="fondoConImagen4">
			<h2 class="letraNaranja tamanioMed textoSerio subrayado">Conversación 1</h2>
			<div class="encuadrarGran interlineado15 fondoNegroTransparente padding2 radius">
				<b class="letraEpica tamaniopeq">[User]: </b><b class="letraVerde">¿Por qué llamaron pointer a una mano en css?</b><br>
				<br><b class="letraEpica tamaniopeq">[IA Respuesta]: </b><b class="letraBlanca">La decisión de usar la palabra "pointer" en lugar de "hand" para referirse al cursor en forma de mano tiene que ver con la historia y evolución de la interfaz de usuario en computadoras.

				Cuando las interfaces gráficas de usuario (GUI) comenzaron a desarrollarse en sistemas operativos como el Xerox Alto en la década de 1970 y posteriormente en sistemas como el Apple Macintosh en la década de 1980, los diseñadores de interfaces gráficas adoptaron la metáfora del "puntero". El cursor, que representaba la posición del ratón en la pantalla, se llamó "puntero" porque apuntaba o señalaba a elementos en la interfaz.

				Con el tiempo, el término "puntero" se consolidó y se utilizó ampliamente para describir el cursor en una interfaz gráfica. La elección de la palabra "pointer" en inglés no tiene una connotación específica de "mano", sino más bien se refiere al objeto que señala o apunta.

				La propiedad CSS cursor: pointer se mantiene fiel a esta terminología y se utiliza para indicar que el cursor se comportará como un "puntero", mostrando la forma de una mano para indicar que el usuario puede hacer clic o interactuar con el elemento. En este contexto, la palabra "pointer" se refiere al concepto más amplio de un dispositivo que apunta o señala, no necesariamente a la anatomía específica de una mano.</b>
			</div>
			<h2 class="letraNaranja tamanioMed textoSerio subrayado">Conversación 2</h2>
			<div class="encuadrarGran interlineado15 fondoNegroTransparente padding2 radius">
				<b class="letraEpica tamaniopeq">[User]: </b><b class="letraVerde">El pointer podría ser cualquier gesto de puntero, no necesariamente la manito, ponerle hand hubiese sido más especifico/práctico para aprender y recordar</b><br>
				<b class="letraEpica tamaniopeq">[IA Respuesta]: </b><b class="letraBlanca">Tu punto es válido. La elección de términos en tecnología y diseño de interfaces a veces puede ser subjetiva, y es cierto que "hand" podría haber sido una elección más descriptiva y directa para referirse al cursor en forma de mano.

				La terminología en informática a menudo evoluciona y se establece por convención a lo largo del tiempo, y a veces estas convenciones pueden ser difíciles de cambiar debido a la prevalencia y al uso generalizado. En este caso, la elección de "pointer" puede haber sido influenciada por la idea de que el cursor "apunta" o "señala" hacia elementos interactivos.

				La claridad y la facilidad de aprendizaje son aspectos importantes del diseño de interfaces, y la retroalimentación de los usuarios a lo largo del tiempo puede influir en ajustes en la terminología y el diseño. Si bien "pointer" es el término establecido y ampliamente utilizado, la sugerencia de "hand" como una alternativa más directa y específica tiene mérito.

				En última instancia, estas elecciones terminológicas pueden ser subjetivas y pueden variar según el contexto cultural y las preferencias individuales. ¡Gracias por compartir tu perspectiva!</b>
			</div>

	        <div class="margen2">
	        	<h2 class="letraNaranja tamanioMed textoSerio subrayado">Conversación 3</h2>
	        	<img class="encuadrarpeq bordeNegroTransparente radius" src="../images/chatgpt.png">
	        </div>

	        <div class="margen2">
	        	<h2 class="letraNaranja tamanioMed textoSerio subrayado">Conversación 4</h2>
	        	<img class="encuadrarpeq bordeNegroTransparente radius" src="../images/iluminado.png">
	        </div>

		</main>
		<footer class="fondoNegro letraVioleta dropSombraBlanca">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonVioleta dropSombraBlancaHover" onclick="location.href='<?php echo $ruta11 ?>'">Subir</button>
    	</footer>
	</body>


</HTML>