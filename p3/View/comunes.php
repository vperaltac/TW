<?php
function HTMLinicio($titulo){
echo <<< HTML
    <!DOCTYPE html>
    <html lang="es-ES">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="View/css/estilo.css">
        <link rel="icon" href="View/img/burger-top.png" type="imgs">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$titulo</title>
    </head>

    <body>
HTML;
}

function HTMLcabecera($titulo){
echo <<< HTML
    <header class="cabecera">
        <img class="logo" src='View/img/burger-top.png' alt='logo'>
        <h1>Comida sana para todos los días</h1>
    </header>
HTML;
}

function HTMLnav(){
echo <<< HTML
    <nav>
        <a href="#">Listado de recetas</a>
        <a href="#">Añadir nueva receta</a>
        <a href="#">Ver mis recetas</a>
    </nav>
HTML;
}


function HTMLsidebar(){
echo <<< HTML
    <aside class="barra-lateral">
    <section class="campo-lateral">
        <form id="login">
            <div class=cabecera-aside>
                <h2>Login</h2>
            </div> 

            <div class="grupo-formulario">
                <label for="uname"><p>Usuario</p></label>
                <input type="text" name="uname" id="email-inicio" required>
            </div>

            <div class="clr"></div>
            
            <div class="grupo-formulario">
                <label for="psw"><p>Clave</p></label>
                <input type="password" name="psw" id="pwd-inicio" required>
            </div>

        
            <input class="boton" type="submit" value="Login" name="" id="boton-inicio">
        </form>
    </section>

    <section id="mas-valoradas" class="campo-lateral">
        <div class=cabecera-aside>
            <h2>+ valoradas</h2>
        </div>

        <ol>
            <li>Risotto de calabaza y champiñones</li>
            <li>Pollo al salmorejo</li>
            <li>Ensalada de espinacas y mango</li>
        </ol>
    </section>

    <section id="n-recetas" class="campo-lateral">
        <div class=cabecera-aside>
            <h2>nº recetas</h2>
        </div>

        <p>el sitio contiene 1452 recetas diferentes</p>
    </section>
    </aside>
    </main>
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