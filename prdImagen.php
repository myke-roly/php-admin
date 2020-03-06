	<!--  CAPTURA DE IMAGEN PRD DE LA BASE DE DATOS
	==================================================== -->
<?php
	
	$prdImagen = $_FILES['prdImagen'];
	$ruta = 'images/productos/';
	$prdImagen = 'noDisponible.jpg';
	if ($_FILES['prdImagen']['error'] == 0) {
		$prdImagenTMP = $_FILES['prdImagen']['tmp_name'];
		$prdImagen = $_FILES['prdImagen']['name'];

	move_uploaded_file($prdImagenTMP, $ruta.$prdImagen);
	}

?>