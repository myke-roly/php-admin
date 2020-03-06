<?php 
session_start();
/*
unset($_SESSION["nombre"]);*/
session_unset(); //ELIMINA TODAS LAS SESSONES
session_destroy(); //ELIMINA LA SESSION

?>