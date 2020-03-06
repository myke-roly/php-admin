<?php
	include "header.php";
	require 'conexion.php';

	$catNombre = $_POST['catNombre'];  // tomamos el dato del formulario
	$sql = "INSERT INTO categorias (catNombre)  /*insertamos en la BD un nuevo campo*/   
	VALUES ('".$catNombre."')";

	mysqli_query($link, $sql) or die (mysqli_error($link));

	$chequeo = mysqli_affected_rows($link);

	mysqli_close ( $link);

?>
<section id="page">
		<h1>Alta de nuevas Categorias</h1>

	<?php if ($chequeo > 0) {
	?>
		<p>
			<?php echo "Se inserto correctamente: ", $chequeo, " campo a la BD.";?></p>
	<?php	
	}
	
	?>

</section>
<?php include "footer.php"; ?>