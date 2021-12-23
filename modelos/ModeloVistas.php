<?php

class ModeloVistas {
    

         public static function obtener_vista_modelo($tipo,$vistas){
        
            //evaluar usuario para mostrar contenido
            if($tipo=="admin"){

                $listaVistas=["home","lista-client","lista-usuario"];
                if(in_array($vistas,$listaVistas)){
                 $contenido='./vistas/admin/contenido/'.$vistas.'-url.php';
                   
                }else{
                    $vistas="home";
                    $contenido='./vistas/admin/contenido/'.$vistas.'-url.php'; 
                }

            }elseif($tipo=="usuario"){
                $listaVistas=["home","lista-client"];
                if(in_array($vistas,$listaVistas)){
                 $contenido='./vistas/alumno/contenido/'.$vistas.'-url.php';
                   
                }else{
                    $vistas="home";
                    $contenido='./vistas/admin/contenido/'.$vistas.'-url.php'; 
                }
            }elseif($tipo=="biblioteca"){
                $listaVistas=["home","adm-usuarios","adm-empleados","adm-libro","adm-prestamo","devolucionPrestamo","adm-reparaciones","adm-categoria"];
                if(in_array($vistas,$listaVistas)){
                 $contenido='./vistas/biblioteca/contenido/'.$vistas.'-url.php';
                   
                }else{
                    $vistas="home";
                    $contenido='./vistas/biblioteca/contenido/'.$vistas.'-url.php'; 
                }
            }
            

            return $contenido;
            }



    
}


?>