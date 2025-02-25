<?php
/*
Template Name: Fictional Estates Map
*/
if (!defined('ABSPATH')) exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <header>
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">
            <div class="container-fluid">
                <a href="#" class="col-3 col-sm-2 navbar-brand p-0 m-0" data-bs-toggle="modal" data-bs-target="#modal">
                    <img class="w-100 ps-lg-5 pe-lg-5" src="<?php echo wp_get_attachment_image_url(26, 'full'); ?>" alt="Fictional Estates Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav mt-4 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none pe-4" href="#" data-bs-toggle="modal"
                                data-bs-target="#modal">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none pe-4" aria-current="page" href="#"
                                data-bs-toggle="modal" data-bs-target="#modal">Wohnungen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none pe-4 active" aria-current="page" href="#"
                                data-bs-toggle="modal" data-bs-target="#modal">Häuser</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none pe-4" href="#" data-bs-toggle="modal"
                                data-bs-target="#modal">Über uns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-decoration-none pe-4" href="#" data-bs-toggle="modal"
                                data-bs-target="#modal">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="mt-5 mb-4">
            <div class="container px-4 px-lg-5">
                <div id="carousel" class="carousel slide rounded">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active h-100">
                            <img src="<?php echo wp_get_attachment_image_url(29, 'full'); ?>" loading="lazy" data-medium-url="<?php echo wp_get_attachment_image_url(29, 'medium'); ?>" class="d-block w-100 object-fit-cover h-100"
                                alt="Immobilienfoto 1">
                        </div>
                        <div class="carousel-item h-100">
                            <img src="<?php echo wp_get_attachment_image_url(28, 'full'); ?>" loading="lazy" class="d-block w-100 h-100 object-fit-cover"
                                alt="Immobilienfoto 2">
                        </div>
                        <div class="carousel-item h-100">
                            <img src="<?php echo wp_get_attachment_image_url(27, 'full'); ?>" loading="lazy" class="d-block w-100 h-100 object-fit-cover"
                                alt="Immobilienfoto 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <section>
            <div class="container px-4 px-lg-5 pb-1">
                <h1 class="text-center fw-semibold pb-4 pt-3 underline-gold">Modernisierte Altbauvilla in
                    Gohlis-Süd</h1>
                <div class="mt-4 mt-sm-5 border border-1 bg-white border-tertiary py-4 px-4 px-lg-5 rounded">
                    <h2 class="mb-4 mt-2 mt-lg-3">Beschreibung</h2>
                    <p>Diese stilvolle Altbauvilla verbindet historischen Charme mit modernem Wohnkomfort. Großzügige,
                        lichtdurchflutete Räume, hohe Decken und edle Parkettböden schaffen eine
                        elegante Atmosphäre. Die aufwendig sanierte Immobilie bietet eine
                        durchdachte Raumaufteilung, die besonders für Familien ideal geeignet
                        ist.<br><br>Der weitläufige Garten lädt zum Entspannen ein und bietet viel Platz für
                        individuelle
                        Gestaltungsmöglichkeiten. Dank der zentralen, aber ruhigen Lage in Gohlis-Süd genießen Sie eine
                        perfekte Kombination aus urbanem Leben und grüner Idylle.</p>
                    <h2 class="mb-4 mt-5">Eigenschaften der Immobilie</h2>
                    <div class="row property-features pt-3">
                        <div class="col-md-5">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="svg-container"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path
                                                d="M32 32c17.7 0 32 14.3 32 32l0 256 224 0 0-160c0-17.7 14.3-32 32-32l224 0c53 0 96 43 96 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-32-224 0-32 0L64 416l0 32c0 17.7-14.3 32-32 32s-32-14.3-32-32L0 64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
                                        </svg></div>

                                    <p class="ms-4 ms-md-3 ms-lg-4">Schlafzimmer</p>
                                </div>
                                <p>3</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="svg-container"> <svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path
                                                d="M240 144A96 96 0 1 0 48 144a96 96 0 1 0 192 0zm44.4 32C269.9 240.1 212.5 288 144 288C64.5 288 0 223.5 0 144S64.5 0 144 0c68.5 0 125.9 47.9 140.4 112l71.8 0c8.8-9.8 21.6-16 35.8-16l104 0c26.5 0 48 21.5 48 48s-21.5 48-48 48l-104 0c-14.2 0-27-6.2-35.8-16l-71.8 0zM144 80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM400 240c13.3 0 24 10.7 24 24l0 8 96 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-240 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l96 0 0-8c0-13.3 10.7-24 24-24zM288 464l0-112 224 0 0 112c0 26.5-21.5 48-48 48l-128 0c-26.5 0-48-21.5-48-48zM48 320l80 0 16 0 32 0c26.5 0 48 21.5 48 48s-21.5 48-48 48l-16 0c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-80c0-8.8 7.2-16 16-16zm128 64c8.8 0 16-7.2 16-16s-7.2-16-16-16l-16 0 0 32 16 0zM24 464l176 0c13.3 0 24 10.7 24 24s-10.7 24-24 24L24 512c-13.3 0-24-10.7-24-24s10.7-24 24-24z" />
                                        </svg></div>

                                    <p class="ms-4 ms-md-3 ms-lg-4">Küche</p>
                                </div>
                                <p>1</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="svg-container"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path
                                                d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3L32 256c-17.7 0-32 14.3-32 32s14.3 32 32 32l448 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 256 96 77.3zM32 352l0 16c0 28.4 12.4 54 32 71.6L64 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-16 256 0 0 16c0 17.7 14.3 32 32 32s32-14.3 32-32l0-40.4c19.6-17.6 32-43.1 32-71.6l0-16L32 352z" />
                                        </svg></div>

                                    <p class="ms-4 ms-md-3 ms-lg-4">Badezimmer</p>
                                </div>
                                <p>2</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="svg-container"> <svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path
                                                d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48l8 0 0 148.9c-1.9 1.4-3.8 2.9-5.6 4.4C10.9 214.5 0 232.9 0 256c0 46.9 14.3 84.1 37 112.5c14.2 17.7 31.1 31.3 48.5 41.8L65.6 469.9c-3.3 9.8-1.6 20.5 4.4 28.8s15.7 13.3 26 13.3l256 0c10.3 0 19.9-4.9 26-13.3s7.7-19.1 4.4-28.8l-19.8-59.5c17.4-10.5 34.3-24.1 48.5-41.8c22.7-28.4 37-65.5 37-112.5c0-23.1-10.9-41.5-26.4-54.6c-1.8-1.5-3.7-3-5.6-4.4L416 48l8 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L24 0zM384 256.3c0 1-.3 2.6-3.8 5.6c-4.8 4.1-14 9-29.3 13.4C320.5 284 276.1 288 224 288s-96.5-4-126.9-12.8c-15.3-4.4-24.5-9.3-29.3-13.4c-3.5-3-3.8-4.6-3.8-5.6l0-.3c0 0 0-.1 0-.1c0-1 0-2.5 3.8-5.8c4.8-4.1 14-9 29.3-13.4C127.5 228 171.9 224 224 224s96.5 4 126.9 12.8c15.3 4.4 24.5 9.3 29.3 13.4c3.8 3.2 3.8 4.8 3.8 5.8c0 0 0 .1 0 .1l0 .3zM328.2 384l-.2 .5 0-.5 .2 0zM112 64l32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z" />
                                        </svg></div>

                                    <p class="ms-4 ms-md-3 ms-lg-4">Gäste-WC</p>
                                </div>
                                <p>1</p>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-2">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="svg-container"> <svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path
                                                d="M32 32C14.3 32 0 46.3 0 64l0 96c0 17.7 14.3 32 32 32s32-14.3 32-32l0-64 64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L32 32zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7 14.3 32 32 32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0 0-64zM320 32c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0 0 64c0 17.7 14.3 32 32 32s32-14.3 32-32l0-96c0-17.7-14.3-32-32-32l-96 0zM448 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 64-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l96 0c17.7 0 32-14.3 32-32l0-96z" />
                                        </svg></div>

                                    <p class="ms-4 ms-md-3 ms-lg-4">Wohnfläche</p>
                                </div>
                                <p>502.50 m²</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="svg-container"> <svg xmlns="http://www.w3.org/2000/svg"
                                            class="features-icons" viewBox="0 0 640 512">
                                            <path
                                                d="M160 0c-6.3 0-12 3.7-14.6 9.5L120.6 64.9 63.9 43.2c-5.9-2.3-12.6-.8-17 3.6s-5.9 11.1-3.6 17l21.7 56.7L9.5 145.4C3.7 148 0 153.7 0 160s3.7 12 9.5 14.6l55.4 24.8L43.2 256.1c-2.3 5.9-.8 12.6 3.6 17s11.1 5.9 17 3.6l56.7-21.7 24.8 55.4c2.6 5.8 8.3 9.5 14.6 9.5s12-3.7 14.6-9.5l24.8-55.4 56.7 21.7c5.9 2.3 12.6 .8 17-3.6s5.9-11.1 3.6-17l-21.7-56.7 55.4-24.8c5.8-2.6 9.5-8.3 9.5-14.6s-3.7-12-9.5-14.6l-55.4-24.8 21.7-56.7c2.3-5.9 .8-12.6-3.6-17s-11.1-5.9-17-3.6L199.4 64.9 174.6 9.5C172 3.7 166.3 0 160 0zm0 96a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm32 64a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm312 16c0-17.7 14.3-32 32-32s32 14.3 32 32v53.4c-14.8 7.7-24 23.1-24 44.6c0 16.8 16 44 37.4 67.2c5.8 6.2 15.5 6.2 21.2 0C624 318 640 290.7 640 274c0-21.5-9.2-37-24-44.6V176c0-44.2-35.8-80-80-80s-80 35.8-80 80v22.7c-9.8-4.3-20.6-6.7-32-6.7c-44.2 0-80 35.8-80 80v21.4c-14.8 7.7-24 23.1-24 44.6c0 16.8 16 44 37.4 67.2c5.8 6.2 15.5 6.2 21.2 0C400 382 416 354.7 416 338c0-21.5-9.2-37-24-44.6V272c0-17.7 14.3-32 32-32s32 14.3 32 32v8V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H504V280v-8V176z">
                                            </path>
                                        </svg></div>

                                    <p class="ms-4 ms-md-3 ms-lg-4">Garten</p>
                                </div>
                                <p>900 m²</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex">
                                    <div class="svg-container"> <svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path
                                                d="M384 64c0-17.7 14.3-32 32-32l128 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-96 0 0 96c0 17.7-14.3 32-32 32l-96 0 0 96c0 17.7-14.3 32-32 32l-96 0 0 96c0 17.7-14.3 32-32 32L32 480c-17.7 0-32-14.3-32-32s14.3-32 32-32l96 0 0-96c0-17.7 14.3-32 32-32l96 0 0-96c0-17.7 14.3-32 32-32l96 0 0-96z" />
                                        </svg></div>

                                    <p class="ms-4 ms-md-3 ms-lg-4">Stockwerke</p>
                                </div>
                                <p>3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-4 my-lg-5">
            <div class="container py-4 px-4 px-lg-5">
                <div class="row mb-4 pb-lg-2 d-flex align-items-center">
                    <div class="col-6 col-lg-3 d-flex align-items-center order-1">
                        <h2 class="mb-0 fw-medium show-nearby">In der Nähe anzeigen:</h2>
                    </div>
                    <div class="col-lg-6 order-3 order-lg-2">
                        <div class="d-flex flex-column flex-sm-row justify-content-center pt-3 pt-md-4 pt-lg-0">

                            <div
                                class="d-flex justify-content-between justify-content-sm-start flex-grow-1 flex-lg-grow-0">
                                <button id="school"
                                    class="btn btn-sm btn-secondary type-btn me-1 me-sm-0 py-3 py-sm-2 flex-grow-1">
                                    Schulen</button>
                                <button id="preschool"
                                    class="btn btn-sm btn-secondary type-btn ms-1 ms-sm-2 py-3 py-sm-2 flex-grow-1">KITAs
                                    /
                                    Kindergärten</button>
                            </div>

                            <div
                                class="d-flex justify-content-between justify-content-sm-start mt-2 mt-sm-0 flex-grow-1 flex-lg-grow-0">
                                <button id="supermarket"
                                    class="btn btn-sm btn-secondary type-btn me-1 me-sm-0 ms-sm-2 py-3 py-sm-2 flex-grow-1">Supermärkte</button>
                                <button id="restaurant"
                                    class="btn btn-sm btn-secondary type-btn ms-1 ms-sm-2 py-3 py-sm-2 flex-grow-1">Restaurants</button>
                            </div>


                        </div>
                    </div>
                    <div class="col-6 col-lg-3 d-flex justify-content-end order-2 order-lg-3">
                        <select class="form-select" id="search-by">
                            <option value="DISTANCE" selected>Näheste</option>
                            <option value="POPULARITY">Beliebteste</option>
                        </select>
                    </div>
                </div>
                <div id="map-container" class="rounded"></div>
            </div>
        </section>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content pt-4 pb-5 px-4">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="h5 fw-light">
                        Wäre dies eine echte Immobilienwebsite würde dieser Link natürlich auf eine andere Seite
                        führen. <br> Dieses Projekt soll allerdings lediglich einen Teilausschnitt einer solchen
                        Website
                        darstellen.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-secondary py-3 px-4">
        <div class="d-flex justify-content-center align-items-center flex-column flex-md-row text-white my-2">
            <p class="mb-md-0">© 2025 Olivia Metz</p>
            <span class="mx-3 d-none d-md-block">|</span>
            <p class="mb-0 text-center text-md-start">Dies ist keine echte Immobilienwebsite sondern Teil eines <a
                    href="https://olivia-metz.com" target="_blank">Portfolio</a></p>
        </div>
    </footer>




    <?php wp_footer(); ?>