<?php 
	include "header.php";
	require "conexion.php";

	$sql = 'SELECT m.mkNombre, p.prdImagen, prdNombre, prdPrecio, prdPresentacion, prdStock 
		FROM marcas as m, productos as p
		WHERE m.idMarca = p.idMarca';
	
	$resultado = mysqli_query($link, $sql) 
				or die (mysqli_error($link));
	
	mysqli_close($link);
?>


<div class='row'>
		<h1>Listado de Productos</h1>
		
		<?php
			while ($listado = mysqli_fetch_assoc ($resultado)) {
				# code...
	 	?>	


		<ul class="list-block">
			 <li>

			 
				<div class=" thumbnail col-sm-3 " style="margin: 10px; padding: 10px; border: 0.5px solid grey;">
					<a href="#" class=""><img class="img-responsive" src="imgProductos/<?php echo $listado['prdImagen']; ?>"></a>
					<a href="#" style="text-decoration: none;"><h2><?php echo $listado['prdNombre']; ?></h2></a>
					<h3>Precio:$ <?php echo $listado['prdPrecio']; ?></h3>
					<p>Presentacion:&nbsp;<?php echo $listado['prdPresentacion']; ?></p>
					<p>Stock:&nbsp;<?php echo $listado['prdStock']; ?></p>
					<div class='col-md-3 col-md-offset-3'>
						<button type="button" class="btn btn-danger">VER MAS</button>
					</div>
				</div>
		</li>
		</ul>

		<?php 
		}
		?>
</div>



<?php include "footer.php"; ?>