<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,body{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <form action="Agregar_prod_controller/create" method="POST">
        <input type="text" placeholder="nombre" name="nombre"><br><br>
        <input type="text" placeholder="descripcion" name="desc"><br><br>
        <input type="text" placeholder="precio" name="precio"><br><br>
        <input type="text" placeholder="stock" name="stock"><br><br>
        <input type="submit" value="agregar producto">
    </form>
</body>
</html>