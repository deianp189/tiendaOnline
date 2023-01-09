<?php 
require_once "controladores/plantilla.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "modelo/plantilla.modelo.php";
require_once "modelo/producto.modelo.php";
require_once "modelo/rutas.php";

$plantilla=new ControladorPlantilla();
$plantilla->plantilla();
?>