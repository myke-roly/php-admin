<?php 
	include 'header.php';
	require 'conexion.php';
?>

	<h1>Panel de Control - Proyecto Integrador</h1>
	
	<nav class="navbar navbar-inverse"> 

		<ul class="nav navbar-nav">

			<li><a href="principal.php"><span class="glyphicon">PRINCIPAL</span></a></li>
			<li>
				<a href="admCategorias.php"><span class="glyphicon glyphicon-align-justify">Categorias</span></a>
			</li>
			<li>
				<a href="admMarcas.php"><span class="glyphicon glyphicon-tags">Marcas</span></a>
			</li>
			<li>
				<a href="admProductos.php"><span class="glyphicon glyphicon-th">Productos</span></a>
			</li>
			<li>
				<a href="admUsuarios.php"><span class="glyphicon glyphicon-user">Usuarios</span></a>
			</li>			
		
		</ul>
	
	</nav>

























<?php 
	include 'footer.php';
 ?>
