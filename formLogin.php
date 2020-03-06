<?php
	include "header.php";

?>
<section id="page">
		<h1>Formulario de Ingreso</h1>

		<form action="login.php" method="POST">
			<input type="text" name="usuEmail" class="form-control" placeholder="@mail">
			<br>
			<input type="password" name="usuPass" class="form-control" placeholder="Contaseña">
			<br>
			<input type="submit" value="Ingrese al Sistema" class="btn btn-success">
		</form>
		<br>
	<?php 
		if (isset($_GET['error']) == 1) {
	?>	
		<div class="alert alert-danger" role="alert"> Usuario y contraseña incorrecto</div>
	<?php
		}
	?>
</section>
<?php include "footer.php"; ?>
