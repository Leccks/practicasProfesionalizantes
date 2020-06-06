<?php
include("db.php");
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome!</title>
		<style type="text/css">
			*{
				margin:0;
				padding: 0;
			}
			html {
				height: 100%;
			}
			body{
				background-color: #383838;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: center;
				height: 100%;
				width: 100%;
				font-size: 2.5vw;
			}
			.cont1{
				width: 100%;
				height: 90%;
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
			}
			.cont2{
				margin: 2%;
				background-color: darkgrey;
				width: 70%;
				min-height: 25%;
				display: flex;
				flex-direction: row;
				flex-wrap: wrap;
			}
			.productCont{
				background-color: lightgray;
				width: 13.15%;
				height: 87%;
				display: flex;
				flex-direction: column;
				align-items: center;
				justify-content: space-around;
				font-size: 1vw;
				margin: 1% 0 0 1%;
			}
			.productCont:hover{
				-webkit-box-shadow: 0px 0px 18px 3px rgba(0,0,0,0.75);
				-moz-box-shadow: 0px 0px 18px 3px rgba(0,0,0,0.75);
				box-shadow: 0px 0px 18px 3px rgba(0,0,0,0.75);
			}
			.productPhoto{
				background-color: black;
				height: 40%;
				width: 80%;
			}
			.productHr{
				width: 95%;
				border: solid black 0.025vw;
			}
			.carousel{
				background-color: black;
				width: 70%;
				height: 50%;
				color: white;
			}
			</style>
	</head>
	<body>
		<div class="cont1">
			<div class="carousel">
			</div>
			<div class="cont2">
				<div class="productCont">
					<div class="productPhoto"></div>
					<hr class="productHr"></hr>
					<a>Nombre Product</a>
					<a>$000</a>
				</div>
				<div class="productCont">
					<div class="productPhoto"></div>
					<hr class="productHr"></hr>
					<a>Nombre Product</a>
					<a>$000</a>
				</div>
				<div class="productCont">
					<div class="productPhoto"></div>
					<hr class="productHr"></hr>
					<a>Nombre Product</a>
					<a>$000</a>
				</div>
				<div class="productCont">
					<div class="productPhoto"></div>
					<hr class="productHr"></hr>
					<a>Nombre Product</a>
					<a>$000</a>
				</div>
				<div class="productCont">
					<div class="productPhoto"></div>
					<hr class="productHr"></hr>
					<a>Nombre Product</a>
					<a>$000</a>
				</div>
				<div class="productCont">
					<div class="productPhoto"></div>
					<hr class="productHr"></hr>
					<a>Nombre Product</a>
					<a>$000</a>
				</div>
				<div class="productCont">
					<div class="productPhoto"></div>
					<hr class="productHr"></hr>
					<a>Nombre Product</a>
					<a>$000</a>
				</div>	
			</div>
		</div>
	</body>
</html>