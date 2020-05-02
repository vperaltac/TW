<?php
function validarContacto($post){
    $valido = true;
    print_r($post);

    if($post['nombre'] == "")
        $valido = false;
    
    if($valido)
        echo "nombre correcto\n";


    $regex_email = "/^(([^<>()[\]\\.,;:\s@\']+(\.[^<>()[\]\\.,;:\s@\']+)*)|(\'.+\'))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
    if(!preg_match($regex_email,$post['email']))
        $valido = false;

    if($valido)
        echo "correo correcto\n";

    // el campo telefono solo acepta un conjunto finito de dígitos
    $regex = "/^\d+$/";
    if(!preg_match($regex,$post['tlf']))
        $valido = false;

    if($valido)
        echo "telefono correcto\n";

    if($post['mensaje'] == "")
        $valido = false;

    if($valido)
        echo "mensaje correcto\n";

    return $valido;
}