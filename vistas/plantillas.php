<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo SISTEMA; ?></title>

  <!-- plugins:css -->
 <?php include "inc/Link.php"; ?>
 <!-- <link rel="stylesheet" href="<?php echo SERVER_URL;?>vistas/paginas/bootstrap.min.css"> -->
 <script src="<?php echo SERVER_URL;?>/vistas/paginas/jquery.slim.min.js"></script>
  <script src="<?php echo SERVER_URL;?>/vistas/paginas/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php 
    $peticionajax=false;
    require_once "./controladores/VistaControlador.php";
    $IV = new VistaControlador();
    $vista = $IV->obtener_vistas_controlador(); 
   
    if($vista=="login" || $vista=="installer"){
       require_once "./vistas/contenido/".$vista."-url.php";
    
		?>
  <div class="container-scroller">
	  
      <?php
      	}else{
     $ruta=explode("/",$_GET["url"]);


     if($ruta[0]=="admin"){
     //ruta por defecto del menu admin
     include "admin/menu.php";
     include "admin/menu_lateral.php";
     include $vista;


     }elseif($ruta[0] == "usuario"){
       
      //ruta por defecto del menu admin
      include "alumno/menu.php";
      include "alumno/menu_lateral.php";
      include $vista;

     }elseif($ruta[0] == "biblioteca"){
        //ruta por defecto del menu admin
      include "biblioteca/menu.php";
      include "biblioteca/menu_lateral.php";
      include $vista;
     }
     
      
      ?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->




  
  

  <?php
	}
  include "inc/script.php" ?>
</body>

</html>
