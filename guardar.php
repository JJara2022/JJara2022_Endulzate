<?php

include("conexion.php");

if ($_SERVER['REQUEST_METHOD'] === "POST")
{
if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['password']) >= 1)
{
$name = trim($_POST['nombre']);
$email = trim($_POST['correo']);
$password= trim($_POST['password']);
$fechareg = date("d/m/y");
$consulta = "INSERT INTO invitados (nombre, password, correo, fecha_reg) VALUES ('$name', '$password', '$email', '$fechareg')"; 
$resultado = mysqli_query($conexion, $consulta);
if ($resultado!=$consulta)
{
 
	?>
<h1 class="bad">Felicidades te has inscrito correctamente</h1>
<a href="salir.php">volver al inicio</a>
    <?php
}else {
   
	?>


<h1 class="bad">¡Usuario registrado! :) </h1>
<a href="salir.php">volver al inicio</a>
	<?php

}

}else{
	?>
<h1 class="bad">¡ Favor complete los campos!</h1>
<a href="salir.php">volver al inicio</a>
<?php
	}
}
?>

