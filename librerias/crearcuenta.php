<?php
//Esta cuenta es de tipo administrar y bibliotecario
require_once "../modelos/utilidadesAdmin.php";
require_once "../modelos/principal.php";
date_default_timezone_set("America/El_Salvador");

if(isset($_POST['action'])){
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$cargo=$_POST["cargo"];
$mail=$_POST["mail"];
$contra=$_POST["contra"];

$estado="A";
$fecha = date('m-d-Y', time());  
//echo "The current date and time in Amsterdam are $DateAndTime.\n";
//date_default_timezone_set('America/Toronto');    
//$DateAndTime2 = date('h:i:s a', time());

$encript = new  Principal();
$clave=$encript->encryption($contra);

$utilidadesAdmin = new utilidadesAdmin();
$datos_login=[
    "nombre"=>$nombre,
    "apellido"=>$apellido,
    "estado"=>$estado,
    "fecha"=>$fecha,
    "nivel"=>$cargo,
    "clave"=>$clave,
    "correo"=>$mail
];

 echo "hora: ".$DateAndTime."fecha: ".$DateAndTime2;
}else{
    echo "Error el nombre de la variable";
}

?>