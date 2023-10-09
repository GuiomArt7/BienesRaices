<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Guía para la decoración de tu hogar</h1>

    <picture>
        <source srcset="build/img/destacada2.webp" type="image/webp">
        <source srcset="build/img/destacada2.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propedad">
    </picture>

    <p class="informacion-meta">Escrito el: <span>20/03/2023</span> por: <span>Admin</span></p>

    <div class="resumen-propiedad">

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, nam vel quia blanditiis praesentium fugiat autem quisquam ad dolorum labore inventore deleniti modi. Odit beatae suscipit perspiciatis nam obcaecati repudiandae!</p>
    </div>
</main>

<?php
incluirTemplate('footer');
?>