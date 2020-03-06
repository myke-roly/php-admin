<?php
	include "header.php";
	require "conexion.php";

	$ruta = "images/productos/";
	$prdImagen = $_POST["prdImagenOriginal"];

	if ($_FILES['prdImagen']['error'] == 0) {
			$prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
			$prdImagen = $_FILES['prdImagen']['name'];


			move_uploaded_file($prdImagenTMP, $ruta.$prdImagen);
		}

	$prdNombre=$_POST["prdNombre"];
	$prdPrecio=$_POST["prdPrecio"];
	$idMarca=$_POST["idMarca"];
	$idCategoria=$_POST["idCategoria"];
	$prdPresentacion=$_POST["prdPresentacion"];
	$prdStock=$_POST["prdStock"];
	$idProducto=$_POST["idProducto"];

	$sql="UPDATE productos
			SET prdNombre='".$prdNombre."',
			prdPrecio = ".$prdPrecio.",
			idMarca =".$idMarca.",
			idCategoria =".$idCategoria.",
			prdPresentacion ='".$prdPresentacion."',
			prdStock =".$prdStock.",
			prdImagen ='".$prdImagen."'
			WHERE idProducto = '".$idProducto."' ";

	mysqli_query( $link, $sql) or die (mysqli_error($link));

	$chequeo = mysqli_affected_rows($link);
	mysqli_close($link);
	

?>

<!-- realizar altas  bajas y modificacion de toso los campos -->

<section id="page">
	<h1>Modificar Producto</h1>
	<br>
	<?php
		if ($chequeo == 1) {
			echo "Se modifico correctamente";
		}else{
			echo "no se modico.";
		}
	?>

	

	<script src="js/funciones.js"></script>
</section>
<?php include "footer.php"; ?>