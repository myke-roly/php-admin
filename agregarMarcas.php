<?php 
	include 'header.php';
	require 'conexion.php';

	$mkNombre = $_POST['mkNombre'];

	$sqlMarcas = 'INSERT INTO marcas(mkNombre) VALUES ("'.$mkNombre.'")';

	$resultadoMarcas = mysqli_query ($link, $sqlMarcas) or die ( mysqli_error($link));

	$chequeo = mysqli_affected_rows ($link);
	mysqli_close ( $link);
?>
<section id="page">
	<h1>Alta de nuevas Marcas</h1>

 	<?php if ($chequeo > 0) {

 	?>
	<p><?php echo 'Se agrego correctamente ', $resultadoMarcas, ' registro a la BD.' ?></p>
	<?php 
 	}
	 ?>	



</section>


<?php include 'footer.php';
?>
