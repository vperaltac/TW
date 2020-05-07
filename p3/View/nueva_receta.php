<?php

function HTMLnueva_receta(){
echo <<< HTML
<main id="bloque-principal">
    <section class="info-contacto">
    <h2>Añadir nueva receta</h2>
    <form class="formulario" method="POST">
        <div class="grupo-formulario">
            <label>Título: </label> 
            <input type="text" name="titulo">

            <label>Autor:</label> 
            <input type="text" name="autor">
            
            <label>Categoría:</label> 
            <input type="text" name="categoria">
            
            <label>Descripción:</label>
            <textarea type="text" name="descripcion"></textarea>

            <label>Ingredientes:</label>
            <textarea type="text" name="ingredientes"></textarea>

            <label>Preparación:</label>
            <textarea type="text" name="preparacion"></textarea>

            <p>Imagen: 
                <form method="POST" enctype="multipart/form-data">
                    <input name="img" type="file"/>
                </form>
            </p>

            <input class="boton" type="submit" value="Añadir evento" name="guardarEvento" id="guardarEvento">
    </form>
    </section>
</div>
HTML;
}
