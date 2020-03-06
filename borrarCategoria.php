<?php
	include "header.php";
	require "conexion.php";

	$idCategoria = $_POST['idCategoria'];
	$sql = "DELETE FROM categorias WHERE idCategoria = ".$idCategoria;
	mysqli_query($link,$sql) or die (mysqli_error($link));	
	
?>

<section id="page">
	<h1>Borrar Categoria</h1>

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