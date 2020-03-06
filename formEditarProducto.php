
<?php
	include "header.php";
	require "conexion.php";

	$idProducto = $_GET['idProducto'];

	$sqlMarcas = "SELECT idMarca,mkNombre FROM marcas";
	$resultadoMarcas = mysqli_query($link,$sqlMarcas) or die (mysqli_error($link));
	
	$sqlCategorias = "SELECT idCategoria,catNombre FROM categorias";
	$resultadoCategorias = mysqli_query($link,$sqlCategorias) or die (mysqli_error($link));
	
	$sqlProducto = "SELECT prdNombre,prdPrecio,prdPresentacion,prdStock,prdImagen 
					FROM productos,marcas,categorias 
					WHERE productos.idCategoria = categorias.idCategoria 
					AND productos.idMarca = marcas.idMarca
					AND productos.idProducto = ".$idProducto;
	$resultadoProducto = mysqli_query($link,$sqlProducto) or die (mysqli_error($link));
	
	$listaProducto = mysqli_fetch_assoc($resultadoProducto);
	mysqli_close($link);
?>
<section id="page">
	<h1>Formulario de modificaciones de un Producto</h1>

	 <form action="editarProducto.php" method="post" enctype="multipart/form-data">
	 	Nombre:
	 	<br>
		 <input type="text" class="form-control" name="prdNombre" placeholder="Nombre Producto" value="<?php echo $listaProducto['prdNombre'];?>">
		 <br>

	 	Precio:
	 	<br>
	 	<div class="input-group">
	 	 <span class="input-group-addon">$</span>
		 <input type="text" class="form-control" name="prdPrecio" placeholder="Precio" value="<?php echo $listaProducto['prdPrecio'];?>">
		</div> 
		 <br>

	 	Marca:
	 	<br>
	 		<select name="idMarca" class="btn btn-default dropdown-toggle" required>
	 		<?php
	 			while($listaMarca = mysqli_fetch_assoc($resultadoMarcas)) {
	 				if ( $listaMarca['idMarca'] == $listaProducto['idMarca'] ) {
	 		?>
	 					<option selected value="<?php echo $listaMarca['idMarca'];?>"><?php echo $listaMarca['mkNombre'];?></option>
			<?php
					}
					else {
						?>
						<option value="<?php echo $listaMarca['idMarca'];?>"><?php echo $listaMarca['mkNombre'];?></option>
						<?php
					}
				}
			?>
	 		</select>
		 <br>

	 	Categoría:
	 	<br>
	 		<select name="idCategoria" class="btn btn-default dropdown-toggle" required>
 			<?php
 			while($listaCategorias = mysqli_fetch_assoc($resultadoCategorias)) {
	 		?>
	 				<option value="<?php echo $listaCategorias['idCategoria'];?>"><?php echo $listaCategorias['catNombre'];?></option>
			<?php
			}
			?>
	 		</select>
		 <br>

	 	Presentación:
	 	<br>
		 <input type="text" class="form-control" name="prdPresentacion" placeholder="datos Presentación" value="<?php echo $listaProducto['prdPresentacion'];?>">
		 <br>

	 	Stock:
	 	<br>
		 <input type="text" class="form-control" name="prdStock" placeholder="datos Stock" value="<?php echo $listaProducto['prdStock'];?>">
		 <br>

	 	Imagen nueva:
 	 	<input type="file" class="form-control" name="prdImagen">
	 	<br>
	 	Imagen Actual:
	 	<br>
		 <img class="img-responsive" src="images/productos/<?php echo $listaProducto['prdImagen'];?>" width='300'>
		 <br>
		 <button type="submit" class="btn btn-success">Modificar Producto</button>
	 	<input type="hidden" name="idProducto" value="<?php echo $idProducto;?>">
 	 	<input type="hidden" name="prdImagenOriginal" value="<?php echo $listaProducto["prdImagen"];?>">
		
	 </form>
	

</section>
<?php include "footer.php"; ?>