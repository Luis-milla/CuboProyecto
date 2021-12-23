<?php
class aplicacion{
    function __construct(){
        echo "<p>estoy en la aplicacion</p>";
        $url=isset($_GET["url"])? $_GET["url"]:null;



        $url=rtrim($url,"/");
        $url=explode('/',$url);

        switch($url[0]){
            
            case "menu":
                
                if(file_exists("vistas/".$url[0].".php")){
                        require_once("vistas/menu.php");
                        $objMenu=new menu();
                    }
                    break;
            case "materias":
                    if(file_exists("vistas/".$url[0].".php")){
                        require_once("vistas/materias.php");
                        //$objMenu=new menu();
                    }
                    break;
        }

        
        
        var_dump($url);
        //echo $url;

    }
}
?>