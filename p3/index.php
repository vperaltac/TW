<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'View/web.php';

// Recibe la URI de htaccess en formato "limpio"
$uri = $_SERVER['REQUEST_URI'];

if($uri == "/"){
    $array_uri = array(
        0    => "",
        1  => "principal"
    );
}
else{
    // Separar URI utilizando como delimitador "/" y guardar cada string en un array
    $array_uri = explode("/",$uri);
}

switch($_SERVER['REQUEST_METHOD']){
    //------------------------------------  GET  ------------------------------------------
    case 'GET':
        HTMLinicio(1);
        HTMLfooter();
        HTMLfin();
    break;
}
?>