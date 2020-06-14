<?php
include("db.php");
include("funciones.php");
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome!</title>
		<link rel="stylesheet" href="./assets/css/inicio.css"> 
	</head>
	<body>
		<a href="http://localhost/practicasProfesionalizantes/index.php/Inicio_controller/cerrar_sesion">cerrar sesion</a>
		<div class="cont1">
			<div class="carousel">
			</div>
			<div class="cont2">
				<?php selectProd($dataCon); ?>
			</div>
		</div>
	</body>
</html>