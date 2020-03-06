<?php
	include "header.php";
	require "conexion.php";

	$idProducto = $_POST['idProducto'];
	$sql = "DELETE FROM productos WHERE idProducto = ".$idProducto;
	mysqli_query($link,$sql) or die (mysqli_error($link));	
	
?>

<section id="page">
	<h1>Borrar Producto</h1>

	<?php 
		$chequeo = mysqli_affected_rows($link);
		if ($chequeo == 1) {
	?>
		Producto borrado correctamente.
	<?php
		}
		else {
	?>
		No se pudo borrar.
	<?php
		}		
	 ?>

</section>

<?php 
	include "footer.php"; 
	mysqli_close($link);
?>