<?php
require_once "principal.php";
class utilidadesAdmin extends Principal {
 

    //inicio de session
public function agregar_usuario_modelo($datos){

$sql=Principal::conectar()->prepare("INSERT INTO empleado(nombre,apellido,estado,fecha_registro,nivel,claveem,correoem)
 VALUES (:NOMBRE,:APELLIDO,:ESTADO,:FECHA,:NIVEL,:CLAVE,:CORREO) ");
$sql->bindParam(":NOMBRE",$datos['nombre']); 
$sql->bindParam(":APELLIDO",$datos['apellido']); 
$sql->bindParam(":ESTADO",$datos['estado']); 
$sql->bindParam(":FECHA",$datos['fecha']);
$sql->bindParam(":NIVEL",$datos['nivel']);
$sql->bindParam(":CLAVE",$datos['clave']);
$sql->bindParam(":CORREO",$datos['correo']); 
$sql->execute();
return $sql;

}
    
}


?>