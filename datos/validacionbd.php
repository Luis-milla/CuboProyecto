<?php
require_once "../configuraciones/APP.php";
if(isset($_POST["action"])){

    $ip=$_POST["ip"];
    $usuario=$_POST["host"];
    $clave=$_POST["clave"];
    $base=$_POST["namebase"];

    
        //conexion con el servidor MySQL 
 $cnn = mysqli_connect($ip,$usuario,$clave);
  if ($cnn) {
          
  //crear tabla
 $sql = "CREATE DATABASE IF NOT EXISTS ".$base;
 if ($cnn->query($sql) === TRUE) {
               
                $cnn->select_db($base);

                $sql = explode(";",file_get_contents(SERVER_URL.'vistas/contenido/biblioteca.sql'));
                foreach($sql as $query){
               //  mysqli_query($query,$cnn);
            		if ($cnn->query($query) === TRUE) {
                      $resultado="204";
            		}
            	}
                 
                if($resultado=="204"){ 

 //guardar la informacion en el archivo credenciales.php
$fp = fopen("../configuraciones/credenciales.php","w+"); //abrimos el archivo para escritura
	
$contenido="<?php".PHP_EOL;
$contenido.="define(\"SERVIDOR\",\"$ip\");".PHP_EOL;
$contenido.="define(\"USUARIO\",\"$usuario\");".PHP_EOL;
$contenido.="define(\"CONTRA\",\"$clave\");".PHP_EOL;
$contenido.="define(\"BASEDATOS\",\"$base\");".PHP_EOL;
$contenido.="?>";
	
fwrite($fp, "$contenido");
fclose($fp);
                    echo $resultado;
                }else{
                    echo "404";
                }

             }else{
                 echo "406";
             }


        
        }else{
           echo "404";
        }
    
        //creacion de la base de datos

    
    
}

  
?>