<?php
	include "header.php"; // html
	require "conexion.php"; // php
	$sql = 'SELECT p.idProducto, prdNombre, prdPrecio, prdPresentacion, prdStock, prdImagen, m.mkNombre, c.catNombre 
			FROM productos as p, marcas as m, categorias as c 
			where p.idMarca = m.idMarca
			and p.idCategoria = c.idCategoria';
	
	/* WHERE productos idCategoria = categoria catNombre' */
	$resultado = mysqli_query($link, $sql) 
					or die (mysqli_error($link)); 
	mysqli_close ($link);

?>
<section id="page">
		<h1>Panel de Administracion de Productos</h1>

		<nav aria-label="...">
	  		<ul class="pager">
	    		<li class="previous"><a href="index.php"><span aria-hidden="true">&larr;</span> Volver</a></li>
	  		</ul>
		</nav>
		<table class="table table-striped table-hover table-bordered">
			<tr class="success">
				<th>Nombre</th>
				<th>Precio</th>
				<th>Marca</th>
				<th>Categoria</th>
				<th>Presentacion</th>
				<th>Stock</th>
				<th>Imagen</th>
				<th colspan="2">
					<a href="formAgregarProducto.php"><img src="images/add.png" alt="mas"></a>
				</th>

			</tr>

<?php 
	while ($lista = mysqli_fetch_assoc ($resultado) ){
		
	?>

			<tr>
				<td><?php echo $lista['prdNombre']; ?></td>
				<td><?php echo $lista['prdPrecio']; ?></td>
				<td><?php echo $lista['mkNombre']; ?></td>
				<td><?php echo $lista['catNombre']; ?></td>
				<td><?php echo $lista['prdPresentacion']; ?></td>
				<td><?php echo $lista['prdStock']; ?></td>
				
				<td><img class="img-responsive" src="imgProductos/<?php echo $lista ['prdImagen']; ?>" width = '100'></td>
				
				<!-- editar -->
				<td><a href="formEditarProducto.php?idProducto=<?php echo $lista['idProducto']; ?>">
					<img src="images/editar.png" name="idProducto" alt="editar"></a>
				</td>

				<!-- borrar -->
				<td><a href="formBorrarProductos.php?idProducto=<?php echo $lista['idProducto']; ?>">
					<img src="images/eliminar.png"  alt="borrar"></a>
				</td>
				

			</tr>
<?php
}

?>

		</table>
	

</section>
<?php include "footer.php"; ?>
