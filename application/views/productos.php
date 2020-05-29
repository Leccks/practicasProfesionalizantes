<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

<style>

    html,body{
        padding:0;
        margin:0;
    }

    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }

    #container_s{
        width:30%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top:5%;
        margin-left:40%;
    }

    #container_m{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items:center;
        margin-left:50%;
        margin-bottom:0%;
    }

    .cont1{
		width: 100%;
		height: 90%;
		display: flex;
		flex-direction: column;
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
    
    .container_main{
        display:flex;
        flex-direction: row;
        width:100%;
        height:100%;
    }

    .container_pro{
        height:100%;
        width:90%;
    }   

    .filtro{
        height:100%;
        width:10%;
    }

</style>

</head>

    <body style="background-color: #383838;">

        <div class="container_main">

            <div class="container_pro">
                
                <div id="container_s">
                    <form class="example" action="/action_page.php">
                        <input type="text" placeholder="Buscar...">
                    </form>
                </div>    

                <div class="cont1">
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
            </div>

            <div class="filtro">
                <button>Menu desplegable</button>
            </div>

        </div>
        
    </body>

</html>