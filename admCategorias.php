<?php 
	include 'header.php';
	require 'conexion.php';
	 
	$sqlCategoria = 'SELECT idCategoria, catNombre FROM categorias';

	$resultadoCategoria = mysqli_query ($link, $sqlCategoria) or die(mysqli_error($link));

	mysqli_close($link);


?>

<section id="page">

	<h1>Panel de Administracion de Categorias</h1>

	<nav aria-label="...">
  		<ul class="pager">
    		<li class="previous"><a href="index.php"><span aria-hidden="true">&larr;</span> Volver</a></li>
  		</ul>
	</nav>

	<table class="table table-striped table-hover table-bordered">
		<tr class="success"> 
			<th>ID</th>
			<th>CATEGORIA</th>
			<th colspan="2"><a href="formAgregarCategoria.php"><img src="images/add.png"></a></th>
		</tr>

	<?php while ( $lista = mysqli_fetch_assoc($resultadoCategoria)) {
	
	?>		

		<tr>
			<td><?php echo $lista['idCategoria']; ?></td>
			<td><?php echo $lista['catNombre']; ?></td>
			<td><a href="formEditarCategoria.php"><img src="images/editar.png"></a></td>
			<td><a href="formBorrarCategoria.php?idCategoria=<?php echo $lista['idCategoria']; ?>"><img src="images/eliminar.png"></a></td>
		</tr>			
	<?php 
	}
	?>
	</table>
	


</section>	


<?php include 'footer.php'; ?>