<?php
require_once "database.php";

// devuelve las recetas de la base de datos en formato JSON
function pedirReceta($id_receta){
    $db = Database::getInstancia();
    $mysqli = $db->getConexion();

    // real_escape_string añade \ junto a caracteres potencialmente peligrosos (\x00,\n,\r,\,'," y \x1a.)
    $id_receta = $mysqli->real_escape_string($id_receta);

    $peticion = $mysqli->query("SELECT * FROM recetas WHERE id_receta='$id_receta';");
    return $peticion->fetch_assoc();
}

function pedirTodasRecetas(){
    $db = Database::getInstancia();
    $mysqli = $db->getConexion();

    $peticion = $mysqli->query("SELECT id_receta,titulo,publicado FROM recetas;");
    $recetas = array();
    $i=0;
    while($fila = $peticion->fetch_assoc()){
        $recetas[$i] = $fila;
        $i++;
    }

    return $recetas;
}
