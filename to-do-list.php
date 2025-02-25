<?php
/*
Template Name: To-Do-List
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


    <main>
        <div class="width-100">
            <h1>2do-List</h1>
            <div id="search-container">
                <input autofocus id="input-field" type="text" placeholder="Add an item" maxlength="30">
                <button id="submit-button">Submit</button>
                <button id="clear-button">Clear list</button>
            </div>
            <br>
            <div id="list-container">
                <ul id="list"></ul>
            </div>
        </div>
    </main>
    <footer>
        <p id="change-color">Change Colors</p>
        <button id="blue">Blue</button>
        <button id="yellow">Yellow</button>
        <button id="green">Green</button>
        <button id="purple">Purple</button>
    </footer>



    <?php wp_footer(); ?>