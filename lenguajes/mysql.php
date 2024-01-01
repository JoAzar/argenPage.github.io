<?php include '../rutas.php'; ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>MySql</title>
		<link rel="stylesheet" href="../styles/style.css">
	</head>
	<body>
		
	</body>
		<header class="fondoVerde">
			<h1 class="dropSombraNegra letraBlanca textoChanga tamanioGran">MySql</h1>
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
								<h1 class="textoSerio letraVerdeHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraVerdeHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraVerdeHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraVerdeHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
		<main class="fondoConImagen2">
			<div class="fondoNegroTransparente">
				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">INSERT</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla1.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla2.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 3</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla3.png">
				</div>
				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">UPDATE</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla4.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla5.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">SELECT</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla6.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla7.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">DELETE</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla8.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla9.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">ORDER BY DESC
					<h1 class="textoChanga letraVerde tamaniopeq">(Se le puede agregar LIMIT para limitar lo que trae)</h1>
				</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla10.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla11.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">ORDER BY ASC</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla12.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla13.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">GROUP BY</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla14.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla15.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">SELECT COUNT
					<h1 class="textoChanga letraVerde tamaniopeq">(Contador de elementos de la tabla)</h1>
				</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla16.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla17.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">SELECT MAX</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla18.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla19.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">SELECT MIN</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla20.png"> 
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla21.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">SELECT AVG</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla22.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla23.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">SELECT SUM</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla24.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla25.png">
				</div>
				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">SELECT SUM</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla26.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla27.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">INNER JOIN
					<h1 class="textoChanga letraVerde tamaniopeq">(Intercepción entre ambas tablas)</h1>
				</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla29.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla30.png">
				</div>
				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">INNER JOIN WHERE
					<h1 class="textoChanga letraVerde tamaniopeq">(Intercepción entre ambas tablas con WHERE)</h1>
				</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla31.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla32.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">LEFT JOIN
					<h1 class="textoChanga letraVerde tamaniopeq">(Intercepción entre ambas tablas lado izquierdo)</h1>
				</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla34.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">RIGHT JOIN
					<h1 class="textoChanga letraVerde tamaniopeq">(Intercepción entre ambas tablas lado derecho)</h1>
				</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla35.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla36.png">
				</div>

				<h1 class="tamanioGran margen2 textoChanga letraVerde fondoNegroTransparente">SUB CONSULTAS
					<h1 class="textoChanga letraVerde tamaniopeq">(Consultas anidadas)</h1>
				</h1>
				<div class="horizontal margen2 fondoBlancoTransparente radius">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 1</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla38.png">
					<h2 class="tamanioMed textoChanga letraVerde">-></h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla39.png">
					<h2 class="tamanioMed textoChanga letraVerde">Paso 2</h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla37.png">
					<h2 class="tamanioMed textoChanga letraVerde">-></h2><img class="margen2 encuadrarPeq bordeBlanco radius cajaSombraNegra" src="../images/tabla40.png">
				</div>


			</div>	
		</main>

		<footer class="fondoNegro letraVerde dropSombraBlanca">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonTiburon dropSombraBlancaHover" onclick="location.href='mysql.php'">Subir</button>
    	</footer>
	</body>
</HTML>