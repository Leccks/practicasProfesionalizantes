<?php
if(empty($_SESSION['mail']) || empty($_SESSION['pass'])){
    $position1 = '<a href="'.$url[1]["url"].'">Iniciar Sesión</a>';
    $position2 = '<br><a href="'.$url[3]["url"].'">Crear cuenta</a>';
}else{
    $position1 = '<a>Sesión Iniciada</a>';
    $position2 = '<br><a href="http://localhost/practicasProfesionalizantes/index.php/Inicio_controller/cerrar_sesion">Cerrar Sesión</a>';
}
?>
<style>
    navbar{
        font-size: 1vw;
    }
    button{
        font-size: 0.7vw;
    }
    .lightgrey{
        background-color: lightgrey;
    }
    .center{
        align-items: center;
        justify-content: center;
    }
    .dflex{
        display: flex;
    }
    .w100{
        width: 100%;
    }
    .w10{
        width: 10%;
    }
    .w2666{
        width: 26.66%;
    }
    .h10{
        height: 10%;
    }
    .h100{
        height: 100%;
    }
    .dirrow{
        flex-direction: row;
    }
    .menu{
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .menu-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .menu:hover .menu-content {display: block;}
</style>
<navbar class="dflex w100 h10 dirrow lightgrey">

    <!--Menú Desplegable!-->
    <div class="menu h100 w10">
        <a>Menu desplegable</a>
        <div class="menu-content">
            <?php
                echo $position1;
                echo $position2;
            ?>
        </div>
    </div>

    <a href="<?php echo $url[0]['url']; ?>" class="h100 dflex w2666 center">Inicio</a>
    <a href="<?php echo $url[2]['url']; ?>" class="h100 dflex w2666 center">Productos</a>
    <a href="<?php echo $url[4]['url']; ?>" class="h100 dflex w2666 center">Ayuda</a>
    <button class="h100 dflex w10 center">Carrito</button>
</navbar>