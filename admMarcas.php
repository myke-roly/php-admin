<?php 
	include "header.php";
	$link = mysqli_connect ('localhost', 'root', '', 'catalogo');

	$sql = 'SELECT idMarca, mkNombre  FROM marcas';


	$resultado = mysqli_query ($link, $sql) or die (mysqli_error($link));
	mysqli_close ($link);
?>
<section id="page">
		<h1>Panel de Administracion de Marcas</h1>

		<nav aria-label="...">
	  		<ul class="pager">
	    		<li class="previous"><a href="index.php"><span aria-hidden="true">&larr;</span> Volver</a></li>
	  		</ul>
		</nav>
		<table class="table table-striped table-hover table-bordered">
			<tr class="success">
				<th>ID</th>
				<th>Categoria</th>
				
				<th colspan="2">
					<a href="formAgregarMarcas.php"><img src="images/add.png" alt="mas"></a>
				</th>

			</tr>

<?php 
	while ($lista = mysqli_fetch_assoc ($resultado) ){
		
	?>

			<tr>
				<td><?php echo $lista['idMarca']; ?></td>
				<td><?php echo $lista['mkNombre']; ?></td>
	
				<td><a href="formEditarMarca.php"><img src="images/editar.png" alt="editar"></a></td>
				<td><a href="formBorrarMarca.php"><img src="images/eliminar.png" alt="borrar"></a></td>
				

			</tr>
<?php
}

?>

		</table>
	

</section>
<?php include "footer.php"; ?>