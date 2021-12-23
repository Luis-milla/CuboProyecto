<?php
if(isset($_POST["ok1"])){
	//informacion para conectarse con la base de datos
	
	$ip=$_POST["ip"];
	$usuario=$_POST["usuario"];
	$clave=$_POST["clave"];
	$base=$_POST["base"];
	
	//conexion con el servidor MySQL 
	$link = mysqli_connect($ip,$usuario,$clave);
	if (!$link) {
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}
	
	//creacion de la base de datos
	$sql = "CREATE DATABASE IF NOT EXISTS ".$base;
	if ($link->query($sql) === TRUE) {
		printf("Proceso terminado.\n");
	}

	//seleccionamos la base  de datos
	$link->select_db($base);

	//creamos un array con el contenido del archivo mibase.sql
	//que tiene los comandos SQL para crear todas las tablas
	//de la base de datos
	
	//*******IMPORTANTE*******// 
	//en el archivo SQL no se debe de incluir las lineas para la
	//creacion de la base de datos y el uso de esta.
	$sql = explode(";",file_get_contents('biblioteca.sql'));//
	//recorremos el arreglo y ejecutamos cada sentencia SQL
	foreach($sql as $query){
		//mysqli_query($query,$link);
		if ($link->query($query) === TRUE) {
			
		}
	}
	
	//guardar la informacion en el archivo credenciales.php
	$fp = fopen("XMLCARP"."/credenciales.php","w+"); //abrimos el archivo para escritura
	
	$contenido="<?php".PHP_EOL;
	$contenido.="define(\"SERVIDOR\",\"$ip\");".PHP_EOL;
	$contenido.="define(\"USUARIO\",\"$usuario\");".PHP_EOL;
	$contenido.="define(\"CONTRA\",\"$clave\");".PHP_EOL;
	$contenido.="define(\"BASEDATOS\",\"$base\");".PHP_EOL;
	$contenido.="?>";
	
	fwrite($fp, "$contenido");
	fclose($fp); //cerramos la conexión y liberamos la memoria
	//fin archivo credenciales.php

	echo "<h1>PROCESO TERMINADO SE RECOMIENTA<br>ELIMINAR LA CARPETA INSTALL</h1><br>";
	
}
?>
 <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Instalcion De Base </title>
  </head>
  <body>
	  

	<div class="container-fluid">
		<div class="row m-5">
			<div class="row align-items-center">
			<div class="col-6 p-2 offset-3">
				
				<div class="col-10 offset-1 p-2 ">
				<h1 class="display-3 lead text-center">INTALACION DE BASE DATOS</h1>
			</div>
			<hr>
				
				<div class="accordion accordion-flush" id="accordionFlushExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="flush-headingOne">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
								Informacion Sobre Los Campos
							</button>
						</h2>
						<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
						</div>
					</div>
					
					
				</div>
				
                 
				  <form method="post" class="row g-3">
					<div class="col-6">
					  <label for="inputAddress" class="form-label">Servidor De Base De Datos</label>
					  <input type="text" name="ip" class="form-control"  id="validationCustom01" placeholder="localhost" required>
					  <div class="valid-feedback">
						Hace falta el Servidor
					  </div>
					</div>
					<div class="col-6">
					  <label for="input2" class="form-label"> Introduzca el nombre de la base de datos </label>
					  <input type="text" name="base" class="form-control" id="input2" placeholder="Db_nombre" required>
					</div>
					<div class="col-md-6">
					  <label for="input3" class="form-label">Nombre Del Usuario</label>
					  <input type="text" name="usuario" class="form-control" id="input3" placeholder="root" required>
					</div>
					<div class="col-md-6">
						<label for="inputCity" class="form-label">Contraseña</label>
						<input type="text" name="clave" class="form-control" id="inputCity">
					  </div>
					
					<div class="col-12 text-center">
					  <button type="submit" name="ok1" class="btn btn-primary">Crear</button>
					</div>
				  </form>



			</div>
		
		  </div>
		</div>
		</div>
	  </div>

	  <script src="js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>