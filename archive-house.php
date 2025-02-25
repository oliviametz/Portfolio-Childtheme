<?php
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
                            <a class="nav-link text-white text-decoration-none pe-4 active" aria-current="page" href="<?php echo home_url('/häuser/'); ?>">Häuser</a>
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
        <div class="container-md mb-5 mt-4 py-xl-2 py-xxl-4 px-5">
            <div class="row mx-lg-4">

                <?php if (have_posts()) { ?>
                    <?php while (have_posts()) {
                        the_post(); ?>

                        <?php
                        $house_images = get_post_meta($post->ID, 'house_images', true);
                        $image_ids = !empty($house_images) ? explode(',', $house_images) : [];

                        $number_of_bathrooms = get_post_meta($post->ID, 'number_of_bathrooms', true);
                        $number_of_bedrooms = get_post_meta($post->ID, 'number_of_bedrooms', true);
                        $living_space = get_post_meta($post->ID, 'living_space', true);
                        ?>


                        <div class="col-sm-6 col-lg-4 g-4">
                            <a class="text-black text-decoration-none" href="<?php the_permalink(); ?>" target="_blank">
                                <div class="card archive-card h-100 p-3">
                                    <div class="ratio ratio-4x3 overflow-hidden">

                                        <img class="d-block w-100 h-100 img-fluid zoom object-fit-cover" src="<?php echo wp_get_attachment_image_url($image_ids[0], 'medium_large'); ?>" loading="lazy" alt="<?php the_title(); ?>">
                                    </div>
                                    <div class="card-body px-1">
                                        <div class="d-flex flex-column">
                                            <h2 class="underline-gold my-2 text-center pb-3 h5">
                                                <?php the_title(); ?>
                                            </h2>
                                            <p class="mt-2"><?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?></p>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-transparent px-0">
                                        <div class="d-flex pt-2">
                                            <div class="d-flex me-3 property-features">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                    <path
                                                        d="M32 32C14.3 32 0 46.3 0 64l0 96c0 17.7 14.3 32 32 32s32-14.3 32-32l0-64 64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L32 32zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7 14.3 32 32 32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0 0-64zM320 32c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0 0 64c0 17.7 14.3 32 32 32s32-14.3 32-32l0-96c0-17.7-14.3-32-32-32l-96 0zM448 352c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 64-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l96 0c17.7 0 32-14.3 32-32l0-96z" />
                                                </svg>
                                                <p class="ms-2 mb-0"><?php echo $living_space ?> m²</p>
                                            </div>
                                            <div class="d-flex me-3 property-features">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                    <path
                                                        d="M32 32c17.7 0 32 14.3 32 32l0 256 224 0 0-160c0-17.7 14.3-32 32-32l224 0c53 0 96 43 96 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-32-224 0-32 0L64 416l0 32c0 17.7-14.3 32-32 32s-32-14.3-32-32L0 64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
                                                </svg>
                                                <p class="ms-2 mb-0"><?php echo $number_of_bedrooms ?></p>
                                            </div>
                                            <div class="d-flex property-features">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                                    <path
                                                        d="M96 77.3c0-7.3 5.9-13.3 13.3-13.3c3.5 0 6.9 1.4 9.4 3.9l14.9 14.9C130 91.8 128 101.7 128 112c0 19.9 7.2 38 19.2 52c-5.3 9.2-4 21.1 3.8 29c9.4 9.4 24.6 9.4 33.9 0L289 89c9.4-9.4 9.4-24.6 0-33.9c-7.9-7.9-19.8-9.1-29-3.8C246 39.2 227.9 32 208 32c-10.3 0-20.2 2-29.2 5.5L163.9 22.6C149.4 8.1 129.7 0 109.3 0C66.6 0 32 34.6 32 77.3L32 256c-17.7 0-32 14.3-32 32s14.3 32 32 32l448 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 256 96 77.3zM32 352l0 16c0 28.4 12.4 54 32 71.6L64 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-16 256 0 0 16c0 17.7 14.3 32 32 32s32-14.3 32-32l0-40.4c19.6-17.6 32-43.1 32-71.6l0-16L32 352z" />
                                                </svg>
                                                <p class="ms-2 mb-0"><?php echo $number_of_bathrooms ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
            </div>

        <?php } else { ?>
            <p>Keine Häuser gefunden</p>
        <?php } ?>
        </div>
        </div>
    </main>
    <footer class="bg-secondary py-3 px-4">
        <div class="d-flex justify-content-center align-items-center flex-column flex-md-row text-white my-2">
            <p class="mb-md-0">© 2025 Olivia Metz</p>
            <span class="mx-3 d-none d-md-block">|</span>
            <p class="mb-0 text-center text-md-start">Dies ist keine echte Immobilienwebsite sondern Teil eines <a
                    href="https://olivia-metz.com" target="_blank">Portfolio</a></p>
        </div>
    </footer>

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


    <?php wp_footer(); ?>