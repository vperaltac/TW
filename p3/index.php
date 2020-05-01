<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'View/comunes.php';
require_once 'View/receta.php';
require_once 'View/principal.php';
require_once 'Controller/usuario.php';
$titulo = "Mi página de recetas";

switch($_SERVER['REQUEST_METHOD']){
    //------------------------------------  GET  ------------------------------------------
    case 'GET':
        if(isset($_GET['receta'])){
            $admin = sesionIniciada();

            HTMLinicio($titulo);
            HTMLcabecera($titulo);
            HTMLnav($admin);
            HTMLreceta();
            HTMLsidebar($admin);
            HTMLfooter();
            HTMLfin();        
        }
        else{
            $admin = sesionIniciada();

            HTMLinicio($titulo);
            HTMLcabecera($titulo);
            HTMLnav($admin);
            HTMLprincipal();
            HTMLsidebar($admin);
            HTMLfooter();
            HTMLfin();        
        }
        
    break;

    //------------------------------------  POST  ------------------------------------------
    case 'POST':
        print_r($_POST);

        if(isset($_POST['logout'])){
            cerrarSesion();
            HTMLinicio($titulo);
            HTMLcabecera($titulo);
            HTMLnav(0);
            HTMLreceta();
            HTMLsidebar(0);
            HTMLfooter();
            HTMLfin();            
        }
        else{
            $admin = iniciarSesion($_POST['uname'],$_POST['psw']);

            HTMLinicio($titulo);
            HTMLcabecera($titulo);
            HTMLnav($admin);
            HTMLreceta();
            HTMLsidebar($admin);
            HTMLfooter();
            HTMLfin();            
        }
    break;
}
?>