<?php
require_once "principal.php";
class utilidadesAdmin extends Principal {
 
    //inicio de session
protected static function registrarusuarios_modelo($datos){
$sql=Principal::conectar()->prepare("SELECT * FROM usuario WHERE correo=:Correo AND clave=:Clave AND estado='activo'");
$sql->bindParam(":Correo",$datos['correo']); 
$sql->bindParam(":Clave",$datos['clave']); 
$sql->execute();
return $sql;

}
    
}


?>