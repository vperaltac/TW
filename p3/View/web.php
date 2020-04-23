<?php
function HTMLinicio($titulo){
echo <<< HTML
    <!DOCTYPE html>
    <html lang="es-ES">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="icon" href="img/burger-top.png" type="imgs">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi página de recetas</title>
    </head>

    <body>
HTML;
}

function HTMLfin(){
echo <<< HTML
    </body>
    </html>
HTML;
}

function HTMLfooter(){
echo <<< HTML
    <footer>
        <p>&copy; <a>Tecnologías Web</a> | <a>Mapa del sitio</a> | <a>contacto</a></p>
    </footer>
HTML;
}