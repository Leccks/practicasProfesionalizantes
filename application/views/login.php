<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/inicio.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>

        html,body {
            height: 100%;
        }

        *{
            margin:0%;
            padding:0%;
            font-family:'Product Sans Regular';
        }

        body{
            display: flex;
            flex-direction: column;
            font-family:'arial';
        }

        .container1{
            width: 100%;
            height: 90%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #container2 {
            background: #292929;
            color:white;
            -webkit-box-shadow: 0px 1px 8px 5px #242424;
            -moz-box-shadow: 0px 1px 8px 5px #242424;
            box-shadow: 0px 1px 8px 5px #242424;
            text-align: center;
            width: 40%;
            height: 26%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }

        #container3{
            -webkit-box-shadow: 0px 1px 8px 5px #242424;
            -moz-box-shadow: 0px 1px 8px 5px #242424;
            box-shadow: 0px 1px 8px 5px #242424;
            color:white;
            background: #292929;
            width: 40%;
            height: 13%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.5vw;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius:10px;
            margin-top: 1%;
            
            
        }

        #container4{
            background: #292929;
            color:white;
            -webkit-box-shadow: 0px 1px 8px 5px #242424;
            -moz-box-shadow: 0px 1px 8px 5px #242424;
            box-shadow: 0px 1px 8px 5px #242424;
            width: 40%;
            height: 10%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.5vw;
            margin-bottom: 1%;
            border-top-left-radius: 10px;
            border-top-right-radius:10px;
        }

        form{
            width:30%;
            height:100%;
            display: flex;
            justify-content: space-around;
            flex-direction: column;
            align-items: center;
        }

        [type=text],[type=password] {
            background-color: #1f1f1f;
            border: none;
            color: white;
            padding: 7% 10%;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 80%;
            margin: 2%;
            width: 300%;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }

        [type=submit]{
            background-color: #1f1f1f;
            border-radius:10px;
            border: none;
            color: white;
            padding: 7% 10%;
            display: inline-block;
            text-align: center;
            text-decoration: none;
            font-size: 90%;
            margin: 2%;
            width: 60%; 
            cursor:pointer;
            transition: all 1s ease;
        }

        [type=submit]:hover{
            background-color: #39ace7;
        }

        [type=submit]:active{
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }
        

        [type=password]:focus{
            background-color: #292929;
            border-bottom: 2px solid #5fbae9;
        }

        [type=password]:placeholder {
            color: white;
        }

        
        [type=text]:focus {
            background-color: #292929;
            border-bottom: 2px solid #5fbae9;
        }

      
        [type=text]:placeholder {
            color:  white;
        }
       
        *:focus {
            outline: none;
        }

        #formFooter {
            background-color: #1f1f1f;
            color:white;
            padding: 1.32%;
            text-align: center;
            -webkit-box-shadow: 0px 3px 8px 4px  #242424;
            -moz-box-shadow: 0px 3px 8px 4px  #242424;
            box-shadow: 0px 3px 8px 4px  #242424;
            width: 37.5%;
            height: 2%;
        }

        .contraseñaBox{
            text-decoration:none;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color:white;
            font-size:90%;
        }

        .contraseñaBox:after {
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #56baed;
            content: "";
            transition: width 0.4s;
            
        }

        .contraseñaBox:hover {
            color: #56baed;
        }

        .contraseñaBox:hover:after{
            margin-top:1%;
            width: 30%;
        }

        .welcome{
            text-align:center;
            font-size:100%;
        }
        
        .send{
            width:auto;
            height:auto;
            background-color:#14c700;
            transition: all 1s ease;   
            font-size:160%;
            position:relative;
            left:8%;
        }

    </style>

</head>

<body style="background-color: #383838;">
    
    <div class="container1">
        <div id="container4">
            <div class=welcome>
                <h1>Bienvenido</h1>
            </div>
        </div>
        
        <div id="container2">
            <form method="post" action="Login_controller">    
                <input type="text" placeholder="Ingrese el email" name="mail">
                <input type="password" placeholder="Ingrese la contraseña" name="password">
                <?php if(!$validacion) echo "Datos invalidos. Vuelva a intentarlo."; ?>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div id="formFooter">
            <a class="contraseñaBox" href="#">¿Olvidaste la contraseña?</a>
        </div>

        <div id="container3">
            <div id="container5">
                <h1>Registrarse como usuario</h1>
                <br>
                <button type="submit" class="send" >Crear nueva cuenta</button>
            </div>
        </div>
    </div>
</body>
</html>