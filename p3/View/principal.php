<?php
function HTMLprincipal(){
    echo <<< HTML
        <main id="bloque-principal">

        <div class="wrap">
        <section class="informacion" id="info-principal">
            <div class="title">
                <h1>comparte</h1>
                <h1>descubre</h1>
                <h1>crea</h1>
                <h1>disfruta</h1>

                <p>Consulta cientos de recetas con indicaciones claras y pasos a seguir detallados</p>
                <p>Comparte tus recetas con el resto de usuarios</p>
                <p>Puntua y opina sobre cualquier receta en la plataforma</p>
            </div>
        </section>

        <section class="recetas-favs">
        <div class="cabecera-receta">
                <h1>Recetas favoritas</h1>
            </div>

          <div class="polaroid">
                <a href="index.php?receta=1">
                    <img src="View/img/receta.jpg" alt="">
                    <div class="texto-polaroid">
                        <p>Fish & Chips</p>
                    </div>
                </a>
          </div>

          <div class="polaroid">
                <a href="index.php?receta=2">
                    <img src="View/img/pollo.png" alt="">
                    <div class="texto-polaroid">
                        <p>Pollo al salmorejo</p>
                    </div>
                </a>
          </div>

          <div class="polaroid">
                <a href="index.php?receta=3">
                    <img src="View/img/ensalada.jpg" alt="">
                    <div class="texto-polaroid">
                        <p>Ensalada de espinacas y mango</p>
                    </div>
                </a>
          </div>



          <div class="polaroid">
                <a href="index.php?receta=3">
                    <img src="View/img/gitano.jpg" alt="">
                    <div class="texto-polaroid">
                        <p>Brazo de gitano de merengue</p>
                    </div>
                </a>
          </div>
        </section>

        </div>
HTML;
}