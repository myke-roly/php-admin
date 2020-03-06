function confirmarBaja(){
	var mensaje = 'Si pulsa el botón "Aceptar", se eliminará el producto seleccionado';
	if(confirm(mensaje)){
		return true;
	}

	// Redirección a adminProductos.php
	window.location = 'adminProductos.php';
	return false;
}