<?php 
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/configuraciones/conexion.php';
$sql = 'SELECT * FROM articulos';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$resultado=$sentencia->fetchAll();
$y=ceil( $sentencia->rowCount()/20);
$pag=1;

if(!isset($_POST['valorCaja1']) || $_POST['valorCaja1']==0 ){
   

    $delimiter=0;
    
   }
   elseif($_POST['valorCaja1']>=1){
    $delimiter = ($_POST['valorCaja1']-1)*20 ; 
     $pag=$_POST['valorCaja1'];

   }
else{
$delimiter = ($_POST['valorCaja1']-1)*20 ; 

 }
    

$sql = 'SELECT * FROM articulos LIMIT '.$delimiter.',20';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();
$resultado=$sentencia->fetchAll();
$t=ceil( $sentencia->rowCount()/20);


 foreach ($resultado as $item){

    echo "<div class='col-lg-3 grid-margin stretch-card'>
      <div class='card'>
        <div class='card-body'>
          <h4 class='card-title'> ". $item['titulo']."</h4>
          <canvas id='lineChart'></canvas>
        </div>
      </div>
    </div>";
   
 }
 echo"<nav aria-label='Page navigation example' style='background-color: #F4F5F7;'>
     <ul class='pagination justify-content-center'>";

     echo $anterio= $pag>1 ? "<li class='page-item'>" : "<li class='page-item disabled'>";

        echo" <a class='page-link' onclick='paginacion( ". $pag-1 ."); return false'>Anterior</a>
       </li>";
        for($i=0;$i<$y;$i++){
            $active=$pag==$i+1 ? 'active' : '';
       echo"<li class='page-item ".$active." ' >
        <a class='page-link' onclick='paginacion( ". $i+1 ."); return false'> ". $i+1 ."</a></li>";
        }

        echo $siguiente = $pag<$y ? "<li class='page-item'>" : "<li class='page-item disabled'>";
        
        echo"<a class='page-link' onclick='paginacion( ". $pag+1 ."); return false'> Siguiente</a>
      </li>
      </ul>
       </nav>";
 
?>