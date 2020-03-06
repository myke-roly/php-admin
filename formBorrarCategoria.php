<?php  
	include "header.php";
	require "conexion.php";

	$idCategoria = $_GET['idCategoria'];

	$sqlCategoria = "SELECT idCategoria, catNombre 
							FROM categorias
							WHERE idCategoria = '".$idCategoria."' ";

	$resultadoCategoria = mysqli_query($link, $sqlCategoria) or die (mysqli_error($link));

	mysqli_close($link);
?>

<section id="page">
	<h1>Confirmar baja del Categoria</h1>

	<?php while ($lista = mysqli_fetch_assoc($resultadoCategoria) ) {
	?>	

	

			<div class="alert alert-danger" role="alert">
	 	 	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	  		<span class="sr-only">Error:</span>
	  		Se eliminra el siguiente Producto
			</div>
				
				<div class="thumbnail"><h2><?php echo $lista['catNombre']; ?></h2></div>

				

				<form action="borrarCategoria.php" method="post" onsubmit="return confirmarBaja()">
				<input type="hidden" name="idCategoria" value="<?php echo $idCategoria;?>">
				<input type="submit" value="Confirmar baja" class="btn btn-danger">
	
				<a href="admCategorias.php" class="btn btn-default" role="button">Volver</a>
				</form> 


		

	<?php
	}
	?>
<script src="js/funciones.js"></script>
</section>

<?php 
	include "footer.php";
?>