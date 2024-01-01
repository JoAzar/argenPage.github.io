<?php include '../rutas.php';?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Su formulario</title>
		<link rel="stylesheet" href="<?php echo ruta0 ?>">
	</head>
	<body>
		<header class="fondoAzul">
			<h1 class="textoSerio tamanioGran sombraNegra letraBlanca subirCorto sinSeleccion">Su formulario</h1>
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
		<main class="fondoBlanco fondoMonkeyUSA">
			<h1 class="margen2 padding2 letraBlanca sombraNegra textoSerio fondoVidrio">Datos de subcripción</h1>

			<?php
			echo '<h1 class="tamaniopeq margen2 padding2 letraBlanca sombraNegra textoChanga fondoVidrio">
			Nombre: '. $_POST['nombre'].'<br>'.
			'Apellido: '. $_POST['apellido'].'<br>'.
			'Email: '. $_POST['email'].'<br>'.
			'Sexo: '. $_POST['sexo'].'<br>'.
			'Estudios: '. $_POST['estudios'].'<br>';

			$afliciones = $_POST['aficiones'];
			$cont = 0;
			foreach($afliciones as $afl) {
				$cont++;
				if($cont==1){
					echo 'Aficiones: '.$afl;
				}else{
					echo ', '.$afl;
				}
			}
			echo '</h1>';
			?>
			
		</main>
	</body>
</html>