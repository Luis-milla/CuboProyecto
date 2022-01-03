
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?php echo SERVER_URL;?>vistas/paginas/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3" method="post">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" 
                   placeholder="Username" name="correo">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" 
                   placeholder="Password" name="clave">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" 
                  name="enviar">
                  SIGN IN
                  </button> 
               
                </div>
               
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <?php
  
require_once "configuraciones/APP.php";
require_once "controladores/controladorLogin.php";
require_once "modelos/principal.php";
if(isset($_POST["enviar"])){

  $obj= new controladorLogin();
  echo $iniciar=$obj->iniciar_session_controlador();

}

  ?>
 <!--<script src="<?php echo SERVER_URL;?>vistas/contenido/ajaxJSLogin/verificacion.js"></script> -->