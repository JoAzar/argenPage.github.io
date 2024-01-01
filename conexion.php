<?php

$servername = "localhost";
$database = "cursada";
$username = "debian-sys-maint";
$password = "oRfjfHz9eMLykqiy";
$arrayDatos = array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

$busqueda = "SELECT alumnos_materias.id_relacion, alumnos.*, materias.*, alumnos_materias.*
              FROM alumnos_materias
              INNER JOIN alumnos ON alumnos_materias.fk_alumnos = alumnos.id_alumno
              INNER JOIN materias ON alumnos_materias.fk_materias = materias.id_materia
              ORDER BY alumnos.id_alumno";

$datos = mysqli_query($conn, $busqueda);


while($row = mysqli_fetch_assoc($datos)) {
	$arrayDatos[] = $row;
}

mysqli_close($conn);

$resultadosMaterias = array();
$resultadosComisiones = array();
$datosAlumnosArr = array();
$fotosArr = array();
$horariosArr = array();
$diaArr = array();
$comisionArr = array();
$materiaArr = array();
$profesorArr = array();
$aulaArr = array();


foreach($arrayDatos as $row) {
	
	$id_relacion = $row['id_relacion'];
	$datosAlumnosArr[$id_relacion] = 
	"Alumna/o N°{$row['id_alumno']}<br>
	Apellido: {$row['apellido']}<br>
	Nombre: {$row['nombreAlumno']}<br>
	DNI: {$row['dni']}<br>";
	
	$fotosArr[$id_relacion] = $row['fotos'];

	$comisionArr[$row['id_relacion']] = $row['comision'];
	$materiaArr[$row['id_relacion']] = $row['nombre'];
	$horariosArr[$row['id_relacion']] = $row['horario'];
	$diaArr[$row['id_relacion']] = $row['dia'];
	$profesorArr[$row['id_relacion']] = $row['profesor'];
	$aulaArr[$row['id_relacion']] = $row['aula'];
}

?>