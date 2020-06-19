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
		<a style="color: white;"><?php var_dump($_SESSION)?></a>
		<div class="cont1">
			<div class="carousel">
			</div>
			<div class="cont2">
				<?php selectProd($dataCon); ?>
			</div>
		</div>
	</body>
</html>