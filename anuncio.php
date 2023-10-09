<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Casa en venta frente al bosque</h1>

    <picture>
        <source srcset="build/img/destacada.webp" type="image/webp">
        <source srcset="build/img/destacada.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propedad">
    </picture>

    <div class="resumen-propiedad">
        <p class="precio">$3,000,000</p>

        <ul class="iconos-caracteristicas">
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="ícono wc">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="ícono estacionamiento">
                <p>3</p>
            </li>
            <li>
                <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="ícono habitaciones">
                <p>4</p>

            </li>
        </ul>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, nam vel quia blanditiis praesentium fugiat autem quisquam ad dolorum labore inventore deleniti modi. Odit beatae suscipit perspiciatis nam obcaecati repudiandae!</p>
    </div>
</main>

<?php
incluirTemplate('footer');
?>