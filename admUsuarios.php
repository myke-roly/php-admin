<?php 
	include "header.php";
	$link = mysqli_connect ('localhost', 'root', '', 'catalogo');

	$sql = 'SELECT idUsuario, usuNombre, usuApellido, usuEmail
	FROM usuarios';


	$resultado = mysqli_query ($link, $sql) or die (mysqli_error($link));
	mysqli_close ($link);
?>
<section id="page">
		<h1>Panel de Administracion de Usuarios</h1>

		<nav aria-label="...">
  		<ul class="pager">
    		<li class="previous"><a href="index.php"><span aria-hidden="true">&larr;</span> Atras</a></li>
  		</ul>
		</nav>
		
		<table class="table table-striped table-hover table-bordered">
			<tr class="success">
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
		
				<th colspan="2">
					<a href="formAgregarUsuarios.php"><img src="images/add.png" alt="mas"></a>
				</th>

			</tr>

<?php 
	while ($lista = mysqli_fetch_assoc ($resultado) ){
		
	?>

			<tr>
				<td><?php echo $lista['idUsuario']; ?></td>
				<td><?php echo $lista['usuNombre']; ?></td>
				<td><?php echo $lista['usuApellido']; ?></td>
				<td><?php echo $lista['usuEmail']; ?></td>
	
				<td><a href="formEditarUsuario.php"><img src="images/editar.png" alt=""></a></td>
				<td><a href="formBorrarUsuario.php"><img src="images/eliminar.png" alt=""></a></td>
				

			</tr>
<?php
}

?>

		</table>
	

</section>
<?php include "footer.php"; ?>