<?php
require_once 'Model/recetas.php';

// obtener datos sobre eventos
function recetas($id_receta){
    $datos = pedirReceta($id_receta);
    $datos['ingredientes'] = explode("#",$datos['ingredientes']);
    $datos['preparacion'] = explode("#",$datos['preparacion']);

    return $datos;
}

function todasRecetas(){
    $recetas = pedirTodasRecetas();

    foreach($recetas as &$receta){
        $receta['ingredientes'] = explode("#",$receta['ingredientes']);
        $receta['preparacion'] = explode("#",$receta['preparacion']);
    }

    return $recetas;
}