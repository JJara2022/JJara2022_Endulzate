<?php

    $conexion = mysqli_connect("localhost", "root", "", "login_resgitro_db");

    if($conexion){
        echo 'conectado exitosamente a la base de datos';
    }else{
        echo 'No se ha podido encontrar la base de datos';

    }
?>

