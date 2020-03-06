<?php
	include "header.php";
	require 'conexion.php';

	$prdNombre = $_POST['prdNombre'];
	$prdPrecio =$_POST['prdPrecio'];
	$prdMarca = $_POST['idMarca'];
	$prdCategoria = $_POST['idCategoria'];
	$prdPresentacion = $_POST['prdPresentacion'];
	$prdStock = $_POST['prdStock'];
	require 'prdImagen.php';
	
	$sqlProductos = "INSERT INTO productos (prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion, prdStock, prdImagen)
					 VALUES
					('".$prdNombre."', '".$prdPrecio."', '".$prdMarca."', '".$prdCategoria."', '".$prdPresentacion."', '".$prdStock."', '".$prdImagen."')";

	mysqli_query($link, $sqlProductos) or die (mysqli_error($link));
	$chequeo = mysqli_affected_rows($link);

	mysqli_close($link);

?>
<section id="page">
		<h1>Alta de nuevos Productos</h1>

	<?php  	if ($chequeo > 0) {
	?>


		<div class="row">
			 
			 	    
			<div class="col-sm-7">
					
			<div class="thumbnail">

					<div class="alert alert-success" role="alert">
			 	 	
			  		 Se ha agregado el siguiente Producto
					</div>
					



				<h2><?php echo $prdNombre; ?></h2>

				<img class="img-responsive" src="images/Productos/<?php echo $prdImagen; ?>">
				<p><?php echo $chequeo['prdNombre']; ?></p>
				<p>Precio:$ <?php echo $prdPrecio; ?></p>
				<p>Marca:&nbsp;<?php echo $prdMarca; ?></p>
				<p>Categoria:&nbsp;<?php echo $prdCategoria; ?></p>
				<p>Presentacion:&nbsp;<?php echo $prdPresentacion; ?></p>
				<p>Stock:&nbsp;<?php echo $prdStock; ?></p>


			</div>
				
					
				<p><a href="formAgregarProducto.php" class="btn btn-primary" role="button">Agregar otro Producto</a> 
					<a href="admProductos.php" class="btn btn-default" role="button">Volver</a>
				</p>
				
			</div>
		</div>
		
	<?php	
	}
	
	?>

</section>


<?php include "footer.php"; ?>