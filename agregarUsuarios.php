<?php
	include "header.php";
	require 'conexion.php';

	$usuNombre = $_POST['usuNombre'];
	$usuApellido =$_POST['usuApellido'];
	$usuEmail = $_POST['usuEmail'];
	$usuPass = $_POST['usuPass'];
	$sql = "INSERT INTO usuarios
			(usuNombre, usuApellido, usuEmail, usuPass)
			VALUES
			('".$usuNombre."', '".$usuApellido."', '".$usuEmail."', '".$usuPass."')";

	mysqli_query($link, $sql) or die (mysqli_error($link));

	$chequeo = mysqli_affected_rows($link);

?>
<section id="page">
		<h1>Alta de nuevos Usuarios</h1>

	<?php  	if ($chequeo > 0) {
	?>
		<p><?php echo 'Se a ingresado: ', $chequeo, ' nuevo Usuario';?></p>
	<?php	
	}
	
	?>

</section>
<?php include "footer.php"; ?>