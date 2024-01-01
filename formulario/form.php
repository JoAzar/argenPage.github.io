<?php include '../rutas.php';?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
		<link rel="stylesheet" href="<?php echo ruta0 ?>">
	</head>
	<body>

	</body>
		<header class="fondoAzul">
			<h1 class="textoSerio tamanioGran sombraNegra letraBlanca subirCorto sinSeleccion">Formulario</h1>
			<div class="avanzarLargoI letraBlanca dropSombraBlanca sinSeleccion"><img class="widMax5" src="../images/dog.gif">Has click para completar</div>
		</header>
		<nav class="navDesplegable fondoBlanco dropSombraNegra">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon" onclick="location.href='<?php echo iniciol ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajesr as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Bitácora</h1>
					<ul class="submenu">
						<?php foreach ($bitacorar as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Hardware</h1>
					<ul class="submenu">
						<?php foreach ($hardwarer as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Hacking</h1>
					<ul class="submenu">
						<?php foreach ($hackingr as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
		<main class="fondoBlanco fondoImagenBlue">

			<form class="margen2 bordeVidrio fondoBlancoTransparente dropSombraNegra wid50 radius" action="procesarForm1.php" method="POST" />
				<h1 class="letraBlanca dropSombraBlancaHover textoSerio margen2 sombraNegra bordeBlancoFino fondoTiburon sinSeleccion"><p class="margen1">Dejanos tu mensaje</p></h1>
				<div>
					<h1 id="padre2" class="padding1 letraBlanca tamanioMed textoChanga sombraNegra manito">Ingrese su nombre</h1>
					<h1 id="padre3" class="margen1 letraBlanca tamanioMed textoChanga sombraNegra manito">Ingrese su apellido</h1>
					<h1 id="padre4" class="margen1 letraBlanca tamanioMed textoChanga sombraNegra manito">Ingrese su email</h1>
				</div>
				
				<div class="margen2 flex horizontal centrarCaja fondoTiburon radius"> 	
					<div class="flex horizontal centrarCaja margen1 letraBlanca tamaniopeq textoChanga sombraNegra">
						<h1 class="margen1 letraBlanca tamanioMed textoChanga sombraNegra subrayado sinSeleccion">Gender</h1>
						<input class="margenIzq" type="radio" name="sexo" value="femenino"> Female
						<input class="margenIzq" type="radio" name="sexo" value="masculino"> Male
						<input class="margenIzq" type="radio" name="sexo" value="otro"> Other
					</div>
				</div>
				<div class="margen2 flex horizontal centrarCaja fondoTiburon radius"> 	
					<div class="flex horizontal centrarCaja margen1 letraBlanca tamaniopeq textoChanga sombraNegra">
						<h1 class="margen1 letraBlanca tamanioMed textoChanga sombraNegra subrayado sinSeleccion">Studies</h1>
						<div class="bordeAzulChecked tamanioMin flex gap">
							<input type="radio" name="estudios" value="elemental">Elemental
							<input type="radio" name="estudios" value="basico">Basics
							<input type="radio" name="estudios" value="bachiller">Bachelor
							<input type="radio" name="estudios" value="diplomado">High School
							<input type="radio" name="estudios" value="licenciatura">College degree
						</div>
					</div>
				</div>
				<div class="margen2 flex horizontal centrarCaja fondoTiburon radius"> 	
					<div class="flex horizontal centrarCaja margen1 letraBlanca tamaniopeq textoChanga sombraNegra">
						<h1 class="margen1 letraBlanca tamanioMed textoChanga sombraNegra subrayado sinSeleccion">Interesting topics</h1>
						<div class="margenIzq bordeAzulChecked tamanioMin flex gap">
							<input type="checkbox" name="aficiones[]" value="desarrollo">Development
							<input type="checkbox" name="aficiones[]" value="web">Web design
							<input type="checkbox" name="aficiones[]" value="software">Software
							<input type="checkbox" name="aficiones[]" value="hardware">Hardware
							<input type="checkbox" name="aficiones[]" value="moviles">Mobile systems
						</div>
					</div>
				</div>
				<div class="margen2 flex horizontal centrarCaja fondoTiburon radius"> 	
					<div class="flex horizontal centrarCaja margen1 letraBlanca tamaniopeq textoChanga sombraNegra">
						<h1 class="margen1 letraBlanca tamanioMed textoChanga sombraNegra subrayado sinSeleccion">Reception of the informative</h1>
						<div class="margenIzq bordeAzulChecked tamanioMin flex gap">
							<select class="button botonCeleste fondoBlanco" name="recepcion">
								<option value="lunes">Select a day of the week</option>
								<option value="lunes">Monday</option>
								<option value="martes">Tuesday</option>
								<option value="miercoles">Wednesday</option>
								<option value="jueves">Thursday</option>
								<option value="viernes">Friday</option>
								<option value="sabado">Saturday</option>
								<option value="domingo">Sunday</option>
							</select>
						</div>
					</div>
				</div>
				<div class="margen2 flex horizontal centrarCaja fondoTiburon radius">
					<div  class="flex horizontal centrarCaja margen1 letraBlanca tamaniopeq textoChanga sombraNegra">
						<h1 id="padre" class="margen1 letraBlanca tamanioMed textoChanga sombraNegra subrayado manito">Touch to write your biography</h1>
						
					</div>
				</div>
				<div>
					<input class="button margen1 botonCeleste fondoBlanco" type="submit" value="comprobar">
					<input class="button margen1 botonCeleste fondoBlanco" type="reset" value="borrar">
				</div>
			</form>

		</main>
		<footer class="fondoNegro letraBlanca textoSerio">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonNaranjetaHover" onclick="location.href='<?php echo forml ?>'">Subir</button>
    	</footer>
	</body>
	<script src="../funcionalidades.js"></script>
</HTML>