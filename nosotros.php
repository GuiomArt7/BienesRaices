<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Conoce sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 años de experiencia
            </blockquote>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis minus facere commodi maiores voluptatibus est? Libero, dolor quis voluptates consequuntur, officiis distinctio tenetur laboriosam voluptatibus repellat, reprehenderit quasi ipsum!
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus officiis minus facere commodi maiores voluptatibus est? Libero, dolor quis voluptates consequuntur, officiis distinctio tenetur laboriosam voluptatibus repellat, reprehenderit quasi ipsum!
            </p>
        </div>
    </div>
</main>

<section class="contenedor seccion">
    <h1>Más sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="icono seguridad" loading="la
                ">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate ad, expedita laboriosam repellat neque recusandae officia. </p>
        </div>

        <div class="icono">
            <img src="build/img/icono2.svg" alt="icono precio" loading="la
                ">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate ad, expedita laboriosam repellat neque recusandae officia. </p>
        </div>

        <div class="icono">
            <img src="build/img/icono3.svg" alt="icono tiempo" loading="la
                ">
            <h3>A tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate ad, expedita laboriosam repellat neque recusandae officia. </p>
        </div>
    </div>
</section>

<?php
incluirTemplate('footer');
?>