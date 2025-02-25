<?php
if (!defined('ABSPATH')) exit;
get_header();
?>

<style>
    html {
        font-size: 14.7px;
    }

    body {
        font-family: "Roboto", sans-serif;
        background: rgb(73, 88, 101);
    }
</style>


<main class="bg-secondary min-vh-100">
    <div class="d-flex justify-content-center align-items-center text-primary pt-10 mb-4">
        <span class="mx-2 pb-h1">&#9679</span>
        <h1 class="fw-semibold h2">404</h1>
        <span class="mx-2 pb-h1">&#9679</span>
    </div>
    <div class="container px-4 px-xs-5">
        <div class="bg-light rounded-4 py-10 px-2 px-xs-3 px-sm-6 mb-8 d-flex flex-column align-items-center">
            <p class="h4">Diese Seite konnte nicht gefunden werden</p>
            <a class="h5" href="<?php echo home_url(); ?>">Zurück zur Homepage</a>
        </div>
    </div>
</main>
<?php get_footer(); ?>