<?php
    function selectProd($conexion){
        $query = "select * from productos";
        $envio = $conexion->query($query) or die($conexion->error);
        while($row = $envio->fetch_assoc()){
            echo "<div class='productCont'>";
            echo "<div class='productPhoto'></div>";
            echo "<hr class='productHr'></hr>";
            echo "<a>".$row['nombre']."</a>";
            echo "<a>$".$row['precio']."</a>";
            echo "</div>";
        }
    }
?>