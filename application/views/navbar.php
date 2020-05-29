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
</style>
<navbar class="dflex w100 h10 dirrow lightgrey">
    <button class="h100 dflex w10 center">Menu desplegable</button>
    <a href="<?php echo $url[0]['url']; ?>" class="h100 dflex w2666 center">Inicio</a>
    <a href="<?php echo $url[2]['url']; ?>" class="h100 dflex w2666 center">Productos</a>
    <a href="<?php echo $url[1]['url']; ?>" class="h100 dflex w2666 center">Login</a>
    <button class="h100 dflex w10 center">Carrito</button>
</navbar>