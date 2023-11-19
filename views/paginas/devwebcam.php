<main class="devwebcamp">
    <h1 class="devwebcamp__heading"><?php echo $titulo ?></h1>
    <p class="devwebcamp__descripcion">Conoce la conferencia mas importante de Latinoamérica</p>
    <div class="devwebcamp__grid">
        <div data-aos="<?php aos_animacion(); ?>" class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen devwebcamp">
            </picture>
        </div>
        <div data-aos="<?php aos_animacion(); ?>" class="devwebcamp__contenido">
            <p data-aos="<?php aos_animacion(); ?>" class="devwebcamp__texto">Phasellus egestas tempus enim, sed ultricies odio euismod vel. Nunc vestibulum sapien quis lorem blandit, vel sagittis justo commodo. Curabitur euismod ante sit amet elementum sodales. Duis non sem lectus. Curabitur imperdiet ante diam, a euismod nunc finibus vitae. </p>

            <p data-aos="<?php aos_animacion(); ?>" class="devwebcamp__texto">Nunc vestibulum sapien quis lorem blandit, vel sagittis justo commodo. Curabitur euismod ante sit amet elementum sodales. Duis non sem lectus. Curabitur imperdiet ante diam, a euismod nunc finibus vitae. Vestibulum sagittis venenatis arcu vitae bibendum. Sed sed ex elementum, accumsan est sit amet, dictum leo. Curabitur ultrices justo eu purus lacinia, sed ornare lorem semper.</p>
        </div>
       
    </div>

</main>