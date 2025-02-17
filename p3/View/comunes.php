<?php
function HTMLinicio(){
echo <<< HTML
    <!DOCTYPE html>
    <html lang="es-ES">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="View/css/estilo.css">
        <link rel="icon" href="View/img/burger-top.png" type="imgs">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Página de recetas</title>
    </head>

    <body>
HTML;
}

function HTMLcabecera(){
echo <<< HTML
    <header class="cabecera">
        <img class="logo" src='View/img/burger-top.png' alt='logo'>
        <h1>Comida sana para todos los días</h1>
    </header>
HTML;
}

function HTMLnav($conectado){
    $add_receta = "";
    if($conectado == 1)
        $add_receta = "<a href='index.php?acc=nueva_receta'>Añadir nueva receta</a>";

echo <<< HTML
    <nav>
        <a href="index.php?acc=principal">Inicio</a>
        $add_receta
        <a href="index.php?acc=listado">Listado de recetas</a>
        <a href="index.php?acc=contacto">Contacto</a>
    </nav>
HTML;
}


function HTMLsidebar($conectado){
    $widget_login = <<< HTML
        <section class="campo-lateral">
        <form action="index.php" id="login" method="post">
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
HTML;

    if($conectado){
        $widget_login = <<< HTML
            <section class="campo-lateral">
                    <div class=cabecera-aside>
                        <h2>Usuario conectado</h2>
                    </div> 

                    <form action="index.php" method="post">
                        <input class="btn-eliminar" type="submit" name="logout" value="Desconectar" />
                    </form>
            </section>
HTML;
    }


echo <<< HTML
    <aside class="barra-lateral">

    $widget_login

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