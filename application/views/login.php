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

        #container {
            position: relative;
            left:27%;
            top:15%;
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: white;
            padding: 30px;
            max-width: 45%;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            text-align: center;
        }

        #container2{
            position: relative;
            left:27%;
            top:150px;
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            background: white;
            padding: 30px;
            max-width: 45%;
            -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
            text-align: center;
        }

    </style>

</head>

<body style="background-color: #383838;">
    <div id="container">
        <form>    
            <input type="text" placeholder="Ingrese el email o dni">
            <br><br>
            <input type="password" placeholder="Ingrese la contraseña">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

    <br><br>
    
    <div id="container2">
        <div class="registro_foot">
            <h1>¿No tiene una cuenta? Registrese dando click aqui</h1>
        </div>
    </div>
</body>
</html>