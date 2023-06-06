<?php
    include('conexion.php');

    session_start();

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM invitados WHERE nombre = '$nombre' AND password = '$password'";
    $resultado = $conexion->query($sql);

    $row = $resultado->fetch_assoc();

 
if ($_SERVER['REQUEST_METHOD']=== "POST")
{
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['password']) >= 1)
    {
        if($row['nombre'] == $nombre && $row['password'] == $password){
            $_SESSION['nombre'] = $nombre;
            header("Location: index.html");
        }else{
            
             /*header("Location: index.php");*/
               	?>
<h1 class="bad">¡Usuario no registrado!</h1>
<a href="salir.php">volver al inicio</a>
<?php
        }

}
else{
            
             /*header("Location: index.php")*/
               	?>
<h1 class="bad">¡Usuario no registrado!</h1>
<a href="salir.php">volver al inicio</a>
<?php

        }

}

?>