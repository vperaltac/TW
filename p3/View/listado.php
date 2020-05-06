<?php
function HTMLlistado(){
    echo <<< HTML
        <main id="bloque-principal">
        <section class="lista-recetas">
            <div class="wrap-receta">
                <a href="index.php?receta=1">
                    <div class="receta-lista">
                        <img class="foto-receta-lista" src='View/img/receta.jpg' alt='foto-receta'>

                        <section id="info-lista-receta">
                            <h1>Fish & Chips</h1>
                            <p class="info-lista-receta-texto">Es uno de los rebozados que mejor resultado dan para freír pescados blancos, porque quedan crujientes por fuera, jugosos por dentro y apenas absorben aceite. Lo habitual es acompañarlos con una crema de guisantes con menta, pero también valen unos guisantes cocidos con nuestra salsa favorita como puede ser una holandesa.</p>
                        </section>                

                    </div>

                    <div class="fast-info">
                        <div class="dificultad">
    <!--                         <img class="logo-dificultad" src='img/dificultad.png'>
    -->                        <div class="tiempo-receta">Fácil</div>
                        </div>

                        <div class="tiempo">
                        <!-- <img class="logo-tiempo" src='img/reloj.png'> -->
                            <div class="dificultad-receta">20 minutos</div>
                        </div>
                    </div>    
                </a>
            </div>

            <div class="wrap-receta">
                <a href="index.php?receta=2">
                    <div class="receta-lista">
                        <img class="foto-receta-lista" src='View/img/pollo.jpg' alt='foto-receta'>

                        <section id="info-lista-receta">
                            <h1>Pollo al salmorejo</h1>
                            <p class="info-lista-receta-texto">Es uno de los rebozados que mejor resultado dan para freír pescados blancos, porque quedan crujientes por fuera, jugosos por dentro y apenas absorben aceite. Lo habitual es acompañarlos con una crema de guisantes con menta, pero también valen unos guisantes cocidos con nuestra salsa favorita como puede ser una holandesa.</p>
                        </section>                

                    </div>

                    <div class="fast-info">
                            <div class="tiempo-receta">Fácil</div>
                            <div class="dificultad-receta">20 minutos</div>
                    </div>   
                </a> 
            </div>
        </section>
HTML;
}