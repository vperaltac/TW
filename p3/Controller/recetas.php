<?php
require_once 'Model/recetas.php';

// obtener datos sobre eventos
function recetas($id_receta){
    $datos = pedirReceta($id_receta);
    $datos['ingredientes'] = explode("#",$datos['ingredientes']);
    $datos['preparacion'] = explode("#",$datos['preparacion']);

    return $datos;
}