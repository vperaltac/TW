<?php
require_once 'View/comunes.php';
require_once 'View/receta.php';
require_once 'View/principal.php';
require_once 'View/contacto.php';
require_once 'View/listado.php';
require_once 'Controller/usuario.php';
require_once 'Controller/contacto.php';
require_once 'Controller/recetas.php';

function renderizarReceta(){
    $admin = sesionIniciada();
    HTMLinicio();
    HTMLcabecera();
    HTMLnav($admin);
    $datos = recetas($_GET['r']);
    HTMLreceta($datos);
    HTMLsidebar($admin);
    HTMLfooter();
    HTMLfin();
}

function renderizarContacto(){
    $admin = sesionIniciada();

    HTMLinicio();
    HTMLcabecera();
    HTMLnav($admin);
    HTMLcontacto();
    HTMLsidebar($admin);
    HTMLfooter();
    HTMLfin();
}

function renderizarListado(){
    $admin = sesionIniciada();

    HTMLinicio();
    HTMLcabecera();
    HTMLnav($admin);

    $recetas = todasRecetas();
    HTMLlistado($recetas);
    HTMLsidebar($admin);
    HTMLfooter();
    HTMLfin();        
}

function renderizarPrincipal(){
    $admin = sesionIniciada();

    HTMLinicio();
    HTMLcabecera();
    HTMLnav($admin);
    HTMLprincipal();
    HTMLsidebar($admin);
    HTMLfooter();
    HTMLfin();
}