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
        height: 100px;
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
        -moz-user-select: -moz-none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -o-user-select: none;
        user-select: none;
    }
    .menu-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 100%;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        margin-top: 36.5%;
    }
</style>
<navbar class="dflex w100 h10 dirrow lightgrey">

    <!--Menú Desplegable!-->
    <div class="menu h100 w10" onclick="dropmenu()">
        <a>Menu desplegable</a>
        <div class="menu-content" id="menu-content">
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

<script>
    function dropmenu(){
        if(document.getElementById("menu-content").style.display == "block"){
            document.getElementById("menu-content").style.display = "none";
        }else{
            document.getElementById("menu-content").style.display = "block";
        }
    }
</script>