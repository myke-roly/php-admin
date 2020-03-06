<?php
	include "header.php";
?>
<section id="page">
		<h1>Formulario de alta de una nuevas Categorias</h1>

		<form action="agregarCategoria.php" method="post">
		<input type="text" name="catNombre" class="form-control" placeholder="Categoria">
		<br>
		<input type="submit" value="Agregar Categoria" class="btn btn-success">


		</form>
	
</section>
<?php include "footer.php"; ?>