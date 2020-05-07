<?php
function HTMLlistado($recetas){
    echo <<< HTML
        <main id="bloque-principal">
        <section class="lista-recetas">
HTML;

    foreach($recetas as &$receta){
        echo <<< HTML
            <div class="wrap-receta">
                <a href="index.php?acc=receta&r=1">
                    <div class="receta-lista">
                        <img class="foto-receta-lista" src='View/img/receta.jpg' alt='foto-receta'>

                        <section id="info-lista-receta">
                            <h1>$receta[titulo]</h1>
                            <p class="info-lista-receta-texto">$receta[descripcion]</p>
                        </section>                

                    </div>

                    <div class="fast-info">
                        <div class="dificultad">
                            <div class="tiempo-receta">$receta[dificultad]</div>
                        </div>

                        <div class="tiempo">
                            <div class="dificultad-receta">$receta[tiempo]</div>
                        </div>
                    </div>    
                </a>
            </div>
        </section>
HTML;
    }
}