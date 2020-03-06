<?php
	include "header.php";
?>
<section id="page">
		<h1>Formulario de alta de nuevos Usuarios</h1>

		<form action="agregarUsuarios.php" method="post">
		Nombre:<br>
		<input type="text" name="usuNombre" class="form-control" placeholder="nombre">
		Apellido:<br>
		<input type="text" name="usuApellido" class="form-control" placeholder="apellido">
		Email:<br>
		<input type="email" name="usuEmail" class="form-control" placeholder="email">
		Contraseña:<br>
		<input type="password" name="usuPass" class="form-control" placeholder="contraseña">
		<br>
		<input type="submit" value="Agregar Usuario" class="btn btn-success">

		</form>
	

</section>
<?php include "footer.php"; ?>