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
	$sql = explode(";",file_get_contents('../contenido/biblioteca.sql'));
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


 <!-- Bootstrap CSS -->
   
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
    <title>Instalcion De Base </title>

	<script type="text/javascript">

		$("#ip").keyup(function(){    
			var ta      =   $("#ip");
			if(ta==="")    {

				letras      =   ta.val().replace("");
				ta.val(letras)
			}      
		}); 

          function validate() {
			  
			//    $('#ip').val();

			//   $('#ip').val().split(' ').length===2  ?  $('#mensaje1').removeClass().addClass('noOk') : $('#mensaje1').removeClass().addClass('ok');
           
			  
		  }

         function datoseEnviar(){
			
			var toastLiveExample = document.getElementById('liveToast')
			var toast = new bootstrap.Toast(toastLiveExample)
	
       
        var parametros = {

		
	            "ip" : document.getElementById("ip").value,
	            "base" : document.getElementById("base").value,
	            "usuario" : document.getElementById("user").value,
	            "clave" : document.getElementById("password").value,
	            "ok1" : document.getElementById("liveToastBtn").value
	              
        };
        $.ajax({
                data:  parametros, //datos que se envian a traves de ajax
                url:   '<?php echo SERVER_URL;?>vistas/contenido/installer-url.php', //archivo que recibe la peticion
                type:  'post', //método de envio
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        $("#resultado").html(response);

						document.getElementById("progre").style.display= "block";
						document.getElementById("text1").style.display= "block";

						setTimeout(function(){
							document.getElementById("progre").style.display= "none";
							document.getElementById("text1").style.display= "none";
							toast.show()
                     
                        },5000);
						
                }
        });
}
  

</script>


  </head>
  <body>
	  
	<style type="text/css">

		#progre{
		
			display: none;
		}
		#text1{
		
		display: none;
	}
	#lodig{
		height: 100px;
	}
	#capa{
		/* background-color: rgba(15, 84, 214, 0.5); */
	}
	.container-fluid{
		/* opacity: 70%; */
		
	}
	.ok{
      display: block;
	}
	.noOk{
		display: none;
	}
	body{
		/* background-image: url("vistas/paginas/images/fondos/fondo_baseDatos.jpg"); */

	}
	
		.preloader {
  width: 70px;
  height: 70px;
  border: 10px solid #eee;
  border-top: 10px solid #666;
  border-radius: 50%;
  animation-name: girar;
  animation-duration: 2s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}
@keyframes girar {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

	</style>

	<div class="container-fluid">
		<div class="row m-5 shadow-lg" id="capa">
			<div class="row align-items-center">
			<div class="col-8 p-2 offset-2">
				
				<div class="col-10 offset-1 p-2 ">
				<h1 class="display-4 lead text-center">INTALACION DE BASE DE DATOS</h1>
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
				   
					
						<div data-spy="scroll" class="col-10 p-2 overflow-auto" style="height: 150px; " data-target="#list-example"  >
						  <h4 id="list-item-1">Servidor</h4>
						  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, culpa!
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, illum? Maiores accusantium nulla consequatur deleniti odio qui tempore iste esse.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?
						  </p>
						  <h4 id="list-item-2">Base Datos</h4>
						  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, culpa!
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, illum? Maiores accusantium nulla consequatur deleniti odio qui tempore iste esse.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?</p>
						  <h4 id="list-item-3">Usuario</h4>
						  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, culpa!
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, illum? Maiores accusantium nulla consequatur deleniti odio qui tempore iste esse.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?</p>
						  <h4 id="list-item-4">Contrasena</h4>
						  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, culpa!
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum, illum? Maiores accusantium nulla consequatur deleniti odio qui tempore iste esse.
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?
							Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem provident expedita ex eos rem excepturi recusandae deserunt culpa veritatis non?</p>
						</div>
					  
				  
				  </div>
				</div>
			  </div>
                 
				  <form method="post" id="basic-form" class="row g-3 mb-4">
					<div class="col-6">
					  <label for="inputAddress" class="form-label">Servidor De Base De Datos</label>
					  <input type="text" name="ip" class="form-control"   id="ip" placeholder="localhost" required>
					  <div class="valid-feedback mensaje" id="mensaje1">
						Hace falta el Servidor    
					  </div>
					</div>
					<div class="col-6">
					  <label for="input2" class="form-label"> Introduzca el nombre de la base de datos </label>
					  <input type="text" name="base" class="form-control" id="base"  placeholder="Db_nombre" required>
					  <div class="valid-feedback ">
						Looks good!
						</div>
					</div>
					<div class="col-md-6">
					  <label for="input3" class="form-label">Nombre Del Usuario</label>
					  <input type="text" name="usuario" class="form-control" id="user" placeholder="root" required>
					</div>
					<div class="col-md-6">
						<label for="inputCity" class="form-label">Contraseña</label>
						<input type="text" name="clave" class="form-control" id="password">
					  </div>
					
					<div class="col-12 text-center">
						<!-- <button type="button" name="ok1" id="liveToastBtn" onclick="datoseEnviar(); return false;" class="btn btn-primary">Crear</button> -->
						<button type="button" name="ok1" id="liveToastBtn" onclick="datoseEnviar(); return false;" class="btn btn-primary">Crear</button>

						</div>
						

					</form>



				 

<div class="position-fixed bottom-1 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="vistas/paginas/images/iconos/ico-base.png" width="20" height="20" class="rounded me-2" alt="...">
      <strong class="me-auto">Base de datos</strong>
      <small><?php echo date("h:i:s"); ?></small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body" id="resultado">
      
    </div>
  </div>
</div>

			</div>
		
		  </div>
		  <div class="row" id="lodig" >
			  <div class="col-2 offset-11"  >

				  <div class="preloader" id="progre" >
				</div>
				
				<p class="lead" id="text1">Procesando</p>
			</div>
		</div>
		</div>
	  </div>

	  <script src="js/jquery.slim.min.js"></script>
	  <script src="js/bootstrap.bundle.min.js"></script>
	
	

  
  </body>
</html>