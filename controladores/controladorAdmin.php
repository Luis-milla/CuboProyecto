<?php
require_once "../modelos/modeloLogin.php";
/*
if($_POST['action'] == "save"){
    echo 1;
}
*/
class controladorAdmin extends utilidadesAdmin {
   
   public function registrarusuarios_controlador(){

    if($_POST['action']=="save"){
 $correo=$_POST['correo'];
 $clave=$_POST['clave'];
 $correo=$_POST['correo'];
 $clave=$_POST['clave'];

    }
    /*
    //se resiven las variables post del login
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];

    //proceso de encriptado
    $usuario=Principal::encryption($clave);

    $datos_usuario=[
        "correo"=>$correo,
        "clave"=>$clave
    ];

    $datos=utilidadesAdmin::registrarusuarios_modelo($datos_usuario);
    if($datos_cuenta->rowCount()==1){
        //caso contrario se muestra este mensaje en login
        echo "<script>
        alert('El usuario se ha registrado')
        </script>";
    }else{
        //caso contrario se muestra este mensaje en login
        echo "<script>
        alert('El usuario no existe')
        </script>";

    }
       
  */      
        }
    
}
*/
?>