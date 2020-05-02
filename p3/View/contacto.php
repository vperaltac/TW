<?php
function HTMLcontacto(){
    echo <<< HTML
    <main id="bloque-principal">
        <section class="info-contacto">
        <div class="texto-lateral">
                <h1>Contacto</h1>
                <p>Gracias por visitar esta web y por tu interés en contactar con nosotros.</p>

                <p>Para contactar con nosotros, rellena el formulario mostrado y pulsa el botón "Enviar" una vez hayas
                terminado de redactar el mensaje.</p>

                <p>Por favor, asegúrate de escribir correctamente el correo electrónico, en caso contrario no nos será 
                posible contestarte una vez leamos tu mensaje.</p>

                <p>Queremos disculparnos de antemano si no contestamos rápidamente a tu comunicado, estamos muy ocupados
                con nuestros proyectos personales y no mantenemos diariamente este método de contacto.</p>
        </div>

        <form class="formulario" method="POST">
            <div class="grupo-formulario">
                <label>Nombre: </label>
                <input type="text" name="nombre">
            </div>
            <div class="grupo-formulario">
                <label>Email: </label>
                <input type="text" name="email">
            </div>
            <div class="grupo-formulario">
                <label>Teléfono: </label>
                <input type="text" name="tlf">
            </div>
            <div class="grupo-formulario">
                <label>Mensaje: </label>
                <textarea name="mensaje"></textarea>
            </div>

            <input class="boton" type="submit" value="Enviar" name="">
        </form>
        </section>
HTML;
}