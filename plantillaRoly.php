<?php
	include "header.php"; // html
	require "conexion.php"; // php
	$sql = 'SELECT idCategoria, catNombre FROM categorias';
	$resultado = mysqli_query($link, $sql) or die (mysqli_error($link));
	mysqli_close ($link);
?>
<section id="page">
		<h1>Panel de Administracion de Categorias</h1>
		<table class="table table-striped table-hover table-bordered">
			<tr class="success">
				<th>ID</th>
				<th>Categoria</th>
				<th colspan="2">
					<img src="images/add.png" alt="mas">
				</th>

			</tr>

<?php 
	while ($lista = mysqli_fetch_array ($resultado) ){
	?>

			<tr>
				<td><?php echo $lista[0]; ?></td>
				<td><?php echo $lista[1]; ?></td>
				<td><img src="images/editar.png" alt=""></td>
				<td><img src="images/eliminar.png" alt=""></td>

			</tr>
<?php
}
?>

		</table>
	

</section>
<?php include "footer.php"; ?>