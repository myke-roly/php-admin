<?php 
	include "header.php";
	require "conexion.php";
	$idProducto = $_GET['idProducto'];
	
	$sqlProductos = "SELECT p.idProducto, prdNombre, prdPrecio, prdPresentacion, prdStock, prdImagen, m.mkNombre, c.catNombre 
			FROM productos as p, marcas as m, categorias as c 
			where p.idMarca = m.idMarca
			and p.idCategoria = c.idCategoria
			and p.idProducto = ".$idProducto;
	
	$resultadoProductos = mysqli_query($link, $sqlProductos) 
					or die (mysqli_error($link));

	mysqli_close ($link); 
?>

<section id="page">
	<h1>Confirmar baja del Producto.</h1>

	<?php while ($lista = mysqli_fetch_assoc($resultadoProductos) ) {
	?>	

	<div class="row">
		<div class='col-sm-7'>
			
		<div class="thumbnail">

			<div class="alert alert-danger" role="alert">
	 	 	<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
	  		<span class="sr-only">Error:</span>
	  		Se eliminra el siguiente Producto
			</div>
				

				<h2><?php echo $lista['prdNombre']; ?></h2>

				<img src="images/Productos/<?php echo $lista['prdImagen']; ?>" class="img-responsive" width='300'>
				<p>Precio:$ <?php echo $lista['prdPrecio']; ?></p>
				<p>Marca:&nbsp;<?php echo $lista['mkNombre']; ?></p>
				<p>Categoria:&nbsp;<?php echo $lista['catNombre']; ?></p>
				<p>Presentacion:&nbsp;<?php echo $lista['prdPresentacion']; ?></p>
				<p>Stock:&nbsp;<?php echo $lista['prdStock']; ?></p
							
					
		</div>			
				
		</div>
	</div>
				<form action="borrarProducto.php" method="post" onsubmit="return confirmarBaja()">
				<input type="hidden" name="idProducto" value="<?php echo $idProducto;?>">

				<input type="hidden" name="prdImagenOriginal" value="<?php echo $listaProducto["prdImagen"];?>">
				<input type="submit" value="Confirmar baja" class="btn btn-danger">
	
				<a href="admProductos.php" class="btn btn-default" role="button">Volver</a>
				</form> 

		

	<?php
	}
	?>
<script src="js/funciones.js"></script>
</section>

<?php 
	include 'footer.php';
?>