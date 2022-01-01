<?php
require_once "principal.php";
class modeloLogin extends Principal {
 
    //inicio de session
protected static function iniciar_session_modelo($datos){
$sql=Principal::conectar()->prepare("SELECT * FROM empleado WHERE correoem=:CORREO
 AND claveem=:CLAVE");
$sql->bindParam(":CORREO",$datos['correo']); 
$sql->bindParam(":CLAVE",$datos['clave']); 
$sql->execute();
return $sql;

}
    
}


?>