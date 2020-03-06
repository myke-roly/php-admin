<?php 
	require "conexion.php";

	$usuEmail=$_POST["usuEmail"];
	$usuPass=$_POST["usuPass"];
	

	$sql=" SELECT usuNombre, usuApellido, idUsuario 
				FROM usuarios
				WHERE usuEmail= '".$usuEmail."'
				AND usuPass= '".$usuPass."' ";
	$resultado = mysqli_query($link, $sql) or die (mysqli_error($link));

	$chequeo = mysqli_num_rows($resultado);

	if ($chequeo == 0) {
		
		// login incorecto.
		header('location:formlogin.php?error=1');// 'header'redirecciona a un HTTP siempre tiene que estar arriba del archivo para que no haya error porque el nunca tiene que estar depues de una etiqueta html.

		

	}else{
		// rutina de autenticacion.
		

		// login correcto.
		header("location: paginaPrincipal.php");
	}


 ?>