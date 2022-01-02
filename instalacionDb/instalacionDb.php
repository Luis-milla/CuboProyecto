<?php

if(isset($_POST["ok1"])){
	 $ip=$_POST["ip"];
	 $usuario=$_POST["usuario"];
	 $clave=$_POST["clave"];
	 $base=$_POST["base"];
	
	//conexion con el servidor MySQL 
	@$link = mysqli_connect($ip,$usuario,$clave);
	if (!$link) {
		echo "Error al instalar la base de datos";
		exit;
	}
	
	//creacion de la base de datos
	$sql = "CREATE DATABASE IF NOT EXISTS ".$base;
	if ($link->query($sql) === TRUE) {
		printf("Proceso terminado.\n");
	}

	//seleccionamos la base  de datos
	@$link->select_db($base);

	//creamos un array con el contenido del archivo mibase.sql
	//que tiene los comandos SQL para crear todas las tablas
	//de la base de datos
	
	//*******IMPORTANTE*******// 
	//en el archivo SQL no se debe de incluir las lineas para la
	//creacion de la base de datos y el uso de esta.
	//$sql = explode(";",file_get_contents(SERVER_URL.'vistas/contenido/biblioteca.sql'));
	$sql = explode(";",file_get_contents('../vistas/contenido/biblioteca.sql'));
	//recorremos el arreglo y ejecutamos cada sentencia SQL
	foreach($sql as $query){
		//mysqli_query($query,$link);
		if ($link->query($query) === TRUE) {
			
		}
	}

	// echo $y=$link->query("SELECT table_name ,table_type
	// FROM information_schema.`TABLES` WHERE TABLE_TYPE='BASE TABLE' && TABLE_SCHEMA = 'bibliotecanueva'");

	//guardar la informacion en el archivo credenciales.php
	//$fp = fopen("vistas/contenido/XMLCARP/credenciales.php","w+"); //abrimos el archivo para escritura
	$fp = fopen("../contenido/XMLCARP/credenciales.php","w+"); //abrimos el archivo para escritura
	
	$contenido="<?php".PHP_EOL;
	$contenido.="define(\"SERVIDOR\",\"$ip\");".PHP_EOL;
	$contenido.="define(\"USUARIO\",\"$usuario\");".PHP_EOL;
	$contenido.="define(\"CONTRA\",\"$clave\");".PHP_EOL;
	$contenido.="define(\"BASEDATOS\",\"$base\");".PHP_EOL;
	$contenido.="?>";
	
	fwrite($fp, "$contenido");
	fclose($fp); //cerramos la conexión y liberamos la memoria
	//fin archivo credenciales.php	
}
?>