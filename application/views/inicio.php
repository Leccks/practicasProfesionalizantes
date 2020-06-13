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
		<div class="cont1">
			<div class="carousel">
			</div>
			<div class="cont2">
				<?php selectProd($dataCon); ?>
			</div>
		</div>
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis a odit doloremque incidunt dolorum voluptatem alias reiciendis dolore ad! Nihil optio minima, eligendi excepturi architecto quod modi ratione ullam molestias.
	</body>
</html>