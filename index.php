
<?php 
require_once "./configuraciones/APP.php";
require_once "./controladores/VistaControlador.php";
$plantilla= new VistaControlador();
$plantilla->obtener_plantilla_controlador();
?>