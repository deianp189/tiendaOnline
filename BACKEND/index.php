<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/administradores.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/visitas.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/productos.controlador.php";

require_once "modelos/administradores.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/visitas.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/productos.modelo.php";

require_once "modelos/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();