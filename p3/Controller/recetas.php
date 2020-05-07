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

function subirNuevaReceta(){
    $titulo = $_POST['titulo'];
    $autor  = $_POST['autor'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $ingredientes = $_POST['ingredientes'];
    $preparacion = $_POST['preparacion'];
    $tiempo = "30 minutos";
    $dificultad ="Difícil";

    $ruta = "View/img/";
    $imagen = file_get_contents($ruta . $_POST['img']);
    echo $imagen;

    nuevaReceta($titulo,$autor,$categoria,$descripcion,$ingredientes,$preparacion,$tiempo,$dificultad,$imagen);
}