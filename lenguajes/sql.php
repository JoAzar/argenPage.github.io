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
			<h1>Sql</h1>
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
			<h2>¿Cómo comenzar?</h2>
			<p><?php
				echo 'Ejecuta el comando: <b>nano ~/.bashrc</b> Para ver todos los alias'; 
			?>	
			</p>
			<div class="linea-centrada"></div>
			<h2>Comandos editados de BASH</h2>
			<p><?php
	          	echo "
	          	apacheini = <b>iniciar apache</b><br>
				<br>apachefin = <b>cerrar apache</b><br>
				<br>apacheres = <b>reiniciar apache</b><br>
				<br>sudo apt update && apt full-upgrade = <b>actualizar</b><br>
				<br>history -c && history -w && rm ~/.bash_history = <b>rmhistorial</b><br>
				<br>sudo sync && sudo sysctl vm.drop_caches=3 = <b>liberar</b><br>
				<br>xdotool getmouselocation = <b>mousefind</b><br>
				<br>sudo service mysql start = <b>sqlini</b><br>
				<br>sudo service mysql stop  = <b>sqlfin</b>
				";?>
	        </p>
	        <div class="linea-centrada"></div>
	        <h2>Cambiar case sensitive de la terminal</h2>
			<p><?php
	          	echo "shopt -s nocaseglob = <b>Activar modo case-insensitive</b><br>
				<br>shopt -u nocaseglob = <b>Volver al modo case-sensitive</b><br>";
				?>
	        </p>
	        <div class="linea-centrada"></div>
	        <h2>Copiar archivos de una carpeta a otra</h2>
			<p><?php
	          	echo "sudo cp <b>/llenar/llenar/DondeEstá/archivo.txt /llenar/llenar/DondeLoLLevo</b><br>";
				?>
	        </p>
	        <div class="linea-centrada"></div>
	        <h2>Ver archivos modificados</h2>
			<p><?php
	          	echo "en los últimos 3 días -> <b>find / -type f -mtime -3</b><br>
	          	<br>en los últimos 30min -> <b>find / -type f -mmin -30</b><br>";
				?>
	        </p>
	        <div class="linea-centrada"></div>
	        <h2>Copiar archivos de una carpeta a otra</h2>
			<p><?php
	          	echo "Abrir nueva terminal -> <b>Ctrl + Alt + T</b><br>
	          	<br>Ver numeración de lineas en nano -> <b>alt + ctrl + 3</b><br>
	          	<br>Ocultar menu de terminal -> <b>gsettings set org.gnome.Terminal.Legacy.Settings default-show-menubar false</b><br>";
				?>
	        </p>

			<div class="linea-centrada"></div>
	        <h2>Cambiar MAC</h2>
			<p><?php
	          	echo "Dar de baja la MAC -> <b>sudo ifconfig (NOMBRE DE LA NET) down</b><br>
	          	<br>Cambiar la MAC -> <b>sudo macchanger -r (NOMBRE DE LA NET)</b><br>
	          	<br>Dar de alta la MAC -> <b>sudo clearifconfig (NOMBRE DE LA NET) up</b><br>";
				?>
	        </p>
	        <div class="linea-centrada"></div>
	        <h2>Copiar archivos de una carpeta a otra</h2>
			<p><?php
	          	echo "Abrir nueva terminal -> <b>Ctrl + Alt + T</b><br>
	          	<br>Ver numeración de lineas en nano -> <b>alt + ctrl + 3</b><br>
	          	<br>Ocultar menu de terminal -> <b>gsettings set org.gnome.Terminal.Legacy.Settings default-show-menubar false</b><br>";
				?>
	        </p>

	        <div class="linea-centrada"></div><br>
	        <h3 class="link" onclick="location.href='https://es.wikipedia.org/wiki/Comandos_Bash'">Más acerca del tema en la Wiki</h3>
		</main>
		<footer>
      		<p class="pie">©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button onclick="location.href='sql.php'">Subir</button>
    	</footer>
	</body>
</HTML>