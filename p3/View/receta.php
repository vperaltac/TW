<?php

function HTMLreceta(){
echo <<< HTML
    <main id="bloque-principal">
        <section class="informacion">
            <div class="cabecera-receta">
                <h1>Fish & Chips</h1>
                <img class="puntuacion" src='View/img/puntuacion.png' alt='puntuacion'>
            </div>


            <div class="tags-autor">
                <div class="tags">Pescado, Patatas, Frito, Fácil</div>
                <div class="autor">Autor: el cocinillas</div>
            </div>

            <section id="descripcion">
                <img class="foto-receta" src='View/img/receta.jpg' alt='foto-receta'>

                <p class="descripcion-texto">Que se haya terminado la Navidad y que nos hayamos hecho el propósito de comer más sano y demás tampoco significa que hayan llegado Los Juegos del Hambre y si el chef Jamie Oliver, que siempre nos da consejos para comer mejor y más sano, nos propone en su web una auténtica receta británica para preparar Fish and Chips, nosotros encantados de prepararla y compartirla con todos vosotros.
                Es uno de los rebozados que mejor resultado dan para freír pescados blancos, porque quedan crujientes por fuera, jugosos por dentro y apenas absorben aceite. Lo habitual es acompañarlos con una crema de guisantes con menta, pero también valen unos guisantes cocidos con nuestra salsa favorita como puede ser una holandesa.</p>
            </section>

            <div class="info-ingredientes">
                <section id="informacion-practica">
                    <h3>Información práctica</h3>
                    <ul>
                        <li>Preparación: 10 min</li>
                        <li>Total: 20 min</li>
                        <li>Calorías: 500</li>
                        <li>Cocción: 10 min</li> 
                        <li>Comensales: 2 - 3</li>
                        <li>Tipo de comida: Plato principal</li>
                    </ul>
                </section>
            
                <section id="ingredientes">
                    <h3>Ingredientes</h3>
                    <ul>
                        <li>Harina de trigo, 225 g y un poco más para enharinar el pescado</li>
                        <li>Cerveza muy fría, 285 ml</li>
                        <li>Patatas para freír, 1 mediana por persona</li>
                        <li>Aceite para freír</li>
                        <li>Sal</li>
                    </ul>
                </section>
            </div>
            
            <ol>
            <li><p>En un bol ponemos la cerveza bien fría. Aparte mezclamos la harina con la levadura tipo Royal y vamos tamizando la mezcla sobre la cerveza a la vez que batimos con unas varillas manuales. El objetivo es conseguir una papilla con la consistencia que veis en las imágenes.</p></li>

            <li><p>Secamos bien los trozos de pescado con papel absorbente -este paso es importante sobre todo si usamos pescado que acabamos de descongelar-, los salamos al gusto y los pasamos por harina de trigo sacudiendo el exceso, con esto conseguiremos que el rebozado no se escurra.</p></li>

            <li><p>Ponemos a calentar abundante aceite en una sartén honda a fuego medio alto y no empezaremos a freír nuestros trozos de pescado hasta que el aceite esté caliente pero sin llegar a humear. Sabremos que está a la temperatura correcta si dejamos caer una cucharadita del rebozado e inmediatamente se forman burbujas alrededor.</p></li>

            <li><p>Cuando el aceite esté listo, pasamos los trozos de pescado enharinados por el rebozado y los vamos colocando con cuidado en el aceite para evitar salpicaduras. Los freímos durante unos 3 – 4 minutos por cada lado, dependiendo del grosor de los filetes, hasta que estén dorados.</p></li>

            <li><p>Según estén, los vamos sacando del aceite y los dejamos escurrir sobre una rejilla o un colador, ya que si los ponemos sobre papel quedarán menos crujientes.</p></li>

            <li><p>Servimos acompañados de patatas fritas, guisantes cocidos y salsa holandesa que podemos aromatizar con algunas especias.</p></li>
            </ol>

            <div class="galeria">
                <div class="galeria-imagen"><img src="View/img/min1.png"></div>
                <div class="galeria-imagen"><img src="View/img/min2.png"></div>
                <div class="galeria-imagen"><img src="View/img/min3.png"></div>
                <div class="galeria-imagen"><img src="View/img/min4.png"></div>
                <div class="galeria-imagen"><img src="View/img/min5.png"></div>
                <div class="galeria-imagen"><img src="View/img/min6.png"></div>
                <div class="galeria-imagen"><img src="View/img/min7.png"></div>
                <div class="galeria-imagen"><img src="View/img/min8.png"></div>
            </div>

            <section class="comentarios">
                <div class="comentario">
                    <div class="comentario-fecha">10/07/2020.</div>
                    <div class="comentario-usuario">Juanita Pérez</div>
                    <div class="comentario-texto">Hmmmmm ... ¡qué buena pinta tiene!</div>    
                </div>

                <div class="comentario">
                    <div class="comentario-fecha">12/07/2020.</div>
                    <div class="comentario-usuario">Anónimo</div>
                    <div class="comentario-texto">Sí, mañana lo voy a probar y ya os contaré</div>    
                </div>
            </section>

            <section class="paginas">
                <img class="numero-pagina" src="View/img/one.png">
                <img class="numero-pagina"  src="View/img/two.png">
                <img class="numero-pagina" src="View/img/three.png">
                <img class="numero-pagina" src="View/img/four.png">
                <img class="numero-pagina" src="View/img/five.png">
                <img class="numero-pagina" src="View/img/close.png">
                <img class="numero-pagina" src="View/img/edit.png">
                <img class="numero-pagina" src="View/img/mail.png">
            </section>
        </section>
HTML;
}
