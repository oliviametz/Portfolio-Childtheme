<?php
/*
Template Name: Imprint
*/
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
    <div class="d-flex justify-content-center align-items-center text-primary pt-8 mb-4">
        <span class="mx-2 pb-h1">&#9679</span>
        <h1 class="fw-semibold h2">IMPRESSUM</h1>
        <span class="mx-2 pb-h1">&#9679</span>
    </div>
    <div class="container px-4 px-xs-5">
        <div class="row bg-light rounded-4 py-7 px-2 px-xs-3 px-sm-6 mb-8">
            <p class="fw-medium">Olivia Metz<br>Friedrich-Chur-Str. 11<br>86153 Augsburg</p>
            <p class="fw-medium">+4915154710617</p>
            <p class="fw-medium mt-3 mb-0">Umsatzsteuer-<br>Identifikationsnummer:<br>DE364726528</p>
        </div>
    </div>
</main>
<?php get_footer(); ?>