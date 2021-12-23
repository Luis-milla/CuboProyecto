<!-- nota las carpetas de js y css que estna afuera son los archivos de este estilo -->


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
   
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
    <title>Instalcion De Base </title>

	<script type="text/javascript">

function toas() {
  
  var toastTrigger = document.getElementById('liveToastBtn')
  var toastLiveExample = document.getElementById('liveToast')

	  var toast = new bootstrap.Toast(toastLiveExample)
	  
	  toast.show()

}

  

</script>

	

  </head>
  <body>
	  

	<div class="container-fluid">
		<div class="row m-5">
			<div class="row align-items-center">
			<div class="col-8 p-2 offset-2">
				
				
				<div class="col-10 offset-1 p-2 ">
				<h1 class="display-3 lead text-center">INTALACION DE BASE DE DATOS</h1>
			</div>
			<!-- <hr> -->
				
			<div class="col-12" >

				<div class="card mb-3">
				  <div class="row g-0 m-3">
					<div class="col-md-2">
					  <div id="list-example" class="list-group">
						<a class="list-group-item list-group-item-action" href="#list-item-1">Servidor</a>
						<a class="list-group-item list-group-item-action" href="#list-item-2">Base Datos</a>
						<a class="list-group-item list-group-item-action" href="#list-item-3">Usuario</a>
						<a class="list-group-item list-group-item-action" href="#list-item-4">Contrasena</a>
					  </div>
					</div>
				   
					
						<div data-spy="scroll" class="col-10 p-2 overflow-auto" style="height: 150px; " data-target="#list-example" data-offset="0" >
						  <h4 id="list-item-1">Servidor</h4>
						  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, culpa!
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, illum? Maiores accusantium nulla consequatur deleniti odio qui tempore iste esse.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?
						  </p>
						  <h4 id="list-item-2">Base Datos</h4>
						  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, culpa!
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, illum? Maiores accusantium nulla consequatur deleniti odio qui tempore iste esse.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?</p>
						  <h4 id="list-item-3">Usuario</h4>
						  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, culpa!
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, illum? Maiores accusantium nulla consequatur deleniti odio qui tempore iste esse.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?</p>
						  <h4 id="list-item-4">Contrasena</h4>
						  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, culpa!
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, illum? Maiores accusantium nulla consequatur deleniti odio qui tempore iste esse.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?</p>
						</div>
					  
				  
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
						<button type="button" name="ok1" id="liveToastBtn" onclick="toas();" class="btn btn-primary">Crear</button>
						</div>
					</form>



				 

<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>





			</div>
		
		  </div>
		</div>
		</div>
	  </div>

	  <script src="js/bootstrap.bundle.min.js"></script>
	
	

	  <script src="js/jquery.slim.min.js"></script>
  
  </body>
</html>