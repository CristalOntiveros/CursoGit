<?php
declare( strict_types = 1 );
require_once "controlador/rutaC.php";
require_once "modelos/rutaM.php";

require_once "controlador/AdminC.php";
require_once "modelos/AdminM.php";

require_once "controlador/EmpleadosC.php";
require_once "modelos/EmpleadosM.php";

$rutas = new RutasControlador();
$rutas -> plantilla();

?>