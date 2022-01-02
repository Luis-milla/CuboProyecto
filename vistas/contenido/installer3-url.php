


 <!-- Bootstrap CSS -->
   
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
    <title>Instalcion De Base </title>

  </head>
  <body>
	  
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
	  <script src="js/scriptfun.js"></script> 
	

  
  </body>

  </html>