<?php
	$servidor = "localhost";
	$usuario = "id20829176_login";
	$password = "ucss2023@Cato";
	$db = "id20829176_eventos";
	$conexion = new mysqli($servidor, $usuario, $password, $db);
	
	if ($conexion->connect_error){
		die("Conexion fallida: " . $conexion->connect_error);
    }

?>