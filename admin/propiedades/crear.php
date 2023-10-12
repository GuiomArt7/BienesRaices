<?php
require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1> Crear </h1>

    <a href="/bienesraices/admin/index.php" class="boton boton-verde">Volver</a>

    <form class="fomulario">
        <fieldset>
            <legend>Información general</legend>

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" placeholder="Título de la Propiedad">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" placeholder="Precio de la Propiedad">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">
        </fieldset>

    </form>
</main>

<?php
incluirTemplate('footer');
?>