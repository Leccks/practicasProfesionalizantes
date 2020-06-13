<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="plantillas/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <style>

        @font-face {
        font-family: 'Product Sans Thin Regular';
        src: local('Product Sans Thin Regular'), url('ProductSans-Thin.woff') format('woff');
        }

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

        [type=text],[type=password] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 300%;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
        }

        [type=submit]{
            background-color: #f6f6f6;
            border-radius:10px;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 60%; 
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
            background-color: white;
            border-bottom: 2px solid #5fbae9;
        }

        [type=password]:placeholder {
            color: white;
        }

        
        [type=text]:focus {
            background-color: white;
            border-bottom: 2px solid #5fbae9;
        }

      
        [type=text]:placeholder {
            color:  white;
        }

       
        *:focus {
            outline: none;
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
                <a href="<?php echo $url[3]['url']; ?>">¿No tiene una cuenta? Registrese dando click aqui</a>
            </div>
        </div>
    </div>
</body>
</html>