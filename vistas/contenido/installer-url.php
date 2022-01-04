
 <!-- Bootstrap CSS -->

 <link rel="stylesheet" href="vistas/contenido/css/bootstrap.min.css">
	<link rel="stylesheet" href="vistas/contenido/css/sweetalert2.css">
	<link rel="stylesheet" href="vistas/contenido/css/sweetalert2.min.css">

    <title>Instalcion De Base </title>


	<div class="container-fluid">
		<div class="row m-5 shadow-lg" id="capa">
			<div class="row align-items-center">
			<div class="col-8 p-2 offset-2">
				
				<div class="col-10 offset-1 p-2 ">
				<h1 class="display-4 lead text-center">INTALACION DE BASE DE DATOS</h1>
			</div>
			
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
                 
				  <form method="post" class="row g-3 mb-4" id="cargar" onsubmit="retur validar();">
					<div class="col-6">
					  <label for="inputAddress" class="form-label">Servidor De Base De Datos</label>
					  <input type="text" class="form-control" name="ip" id="ip" placeholder="localhost" >
					  <div class="valid-feedback mensaje" >
						Hace falta el Servidor    
					  </div>
					</div>
					<div class="col-6">
					  <label for="input2" class="form-label"> Introduzca el nombre de la base de datos </label>
					  <input type="text" class="form-control" id="base"  placeholder="Db_nombre" > 
					  <div class="valid-feedback ">
						Looks good!
						</div>
					</div>
					<div class="col-md-6">
					  <label for="input3" class="form-label">Nombre Del Usuario</label>
					  <input type="text" class="form-control" id="user" placeholder="root" >
					</div>
					<div class="col-md-6">
						<label for="inputCity" class="form-label">Contraseña</label>
						<input type="text" class="form-control" id="clave" >
					  </div>
					
					<div class="col-12 text-center">
						<button type="button" id="enviar" class="btn btn-primary">Crear</button>

						</div>		
					</form>

			</div>
		
</div>

		</div>
	  </div>

      <!-- <script src="vistas/contenido/ajaxJSLogin/verificacion.js"></script> -->
	  <script src="vistas/contenido/ajaxJSLogin/validacion.js"></script>
	  <script src="vistas/contenido/js/sweetalert2.all.min.js"></script>
	  <script src="vistas/contenido/js/sweetalert2.all.js"></script>
	  <script src="vistas/contenido/js/jquery.slim.min.js"></script>
	  <script src="vistas/contenido/js/bootstrap.bundle.min.js"></script>
	