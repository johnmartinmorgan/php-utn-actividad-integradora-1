<?php

// Constante con "define"
define("ACTIVIDAD", "Actividad Integradora Obligatoria Módulo 1");

// Constante con "const"
const TEMAS = array('Delimitadores', 'Sintaxis', 'Variables', 'Constantes', 'Operadores');

$alumno = "John Morgan";
$profesion = ", desarrollador web Jr.";
$alumno .= $profesion;
$entrega = "6 de diciembre de 2022";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<title><?php echo ACTIVIDAD ?></title>
</head>

<style>
	* {
		font-family: 'Archivo', sans-serif;
	}
</style>

<body>

	<div class="container py-5">
		<div class="row py-5">
			<h1><?php echo ACTIVIDAD ?></h1>
		</div>
		<div class="row py-5">
			<div class="col-md-12 col-lg-4">
				<h2>Alumno</h2>
				<p><?php echo $alumno ?></p>
			</div>
			<div class="col-md-12 col-lg-4">
				<h2>Fecha de entrega</h2>
				<p><?php echo $entrega ?></p>
			</div>
			<div class="col-md-12 col-lg-4">
				<h2>Temas</h2>
				<p><?php echo TEMAS[4] . ", " . TEMAS[3] . ", etc." ?></p>
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>