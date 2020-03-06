<?php
	include "header.php";
?>
<section id="page">
		<h1>Formulario de alta de nuevas Marcas</h1>

		<form action="agregarMarcas.php" method="post">
		<input type="text" name="mkNombre" class="form-control" placeholder="Marca">
		<br>
		<input type="submit" value="Agregar Marca" class="btn btn-success">


		</form>
	
</section>
<?php include "footer.php"; ?>