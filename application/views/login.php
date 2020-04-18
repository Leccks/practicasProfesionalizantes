<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="plantillas/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>
        html,body {
            height: 100%;
        }

        *{
            margin:0;
            padding:0;
        }

        body{
            display: flex;
            flex-direction: column;
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
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 0.5vw 0.5vw 0.5vw 0.5vw;
            background: white;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            text-align: center;
            width: 40%;
            height: 25%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #container3{
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 0.5vw 0.5vw 0.5vw 0.5vw;
            background: white;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            width: 40%;
            height: 10%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.5vw;
            margin-top: 2%;
        }
        form{
            width:30%;
            height:100%;
            display: flex;
            justify-content: space-around;
            flex-direction: column;
            align-items: center;
        }
        input{
            height:10%;
            width:75%;
            font-size: 0.8vw;
            padding-left: 1%;
        }
        button{
            height:10%;
            width:20%;
        }
    </style>

</head>

<body style="background-color: #383838;">
    <div class="container1">
        <div id="container2">
            <form>    
                <input type="text" placeholder="Ingrese el email o dni">
                <input type="password" placeholder="Ingrese la contraseña">
                <button type="submit">Enviar</button>
            </form>
        </div>
        
        <div id="container3">
            <div class="registro_foot">
                <h1>¿No tiene una cuenta? Registrese dando click aqui</h1>
            </div>
        </div>
    </div>
</body>
</html>