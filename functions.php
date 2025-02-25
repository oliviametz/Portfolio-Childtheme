<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css', 8);

if (!function_exists('child_theme_configurator_css')):
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('twentytwentyfive-style', 'twentytwentyfive-style'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 9);

// END ENQUEUE PARENT ACTION





function google_fonts_resource_hints($hints, $relation_type)
{
    if ('preconnect' === $relation_type) {
        $hints[] = 'https://fonts.googleapis.com';
        $hints[] = 'https://fonts.gstatic.com';
    }
    return $hints;
}
add_filter('wp_resource_hints', 'google_fonts_resource_hints', 10, 2);



function enqueue_google_fonts()
{

    if (is_page_template('homepage.php') || is_page_template('imprint.php')) {
        wp_enqueue_style(
            'google-font-roboto',
            'https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
            [],
            null
        );
    } else  if (is_page_template('to-do-list.php')) {
        wp_enqueue_style(
            'google-font-tektur',
            'https://fonts.googleapis.com/css2?family=Tektur:wght@400;500;600;700&display=swap',
            [],
            null
        );
    } else  if (is_page_template('fictional-estates-map.php') || is_singular('house') || (is_post_type_archive('house'))) {
        wp_enqueue_style(
            'google-font-montserrat',
            'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
            [],
            null
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_google_fonts');



function enqueue_bootstrap()
{
    if (is_page_template('homepage.php') || is_page_template('imprint.php') || is_404()) {

        // Customized Bootstrap CSS
        wp_enqueue_style('custom-bootstrap-css', get_stylesheet_directory_uri() . '/css/custom-bootstrap.css', [], '5.3.3', 'all');

        // Bootstrap JS (CDN, Version 5.3.3)
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], '5.3.3', true);
    } else if (is_page_template('fictional-estates-map.php') || is_singular('house') || (is_post_type_archive('house'))) {

        // Bootstrap CSS (CDN, Version 5.3.3)
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3', 'all');

        // Bootstrap JS (CDN, Version 5.3.3)
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], '5.3.3', true);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap', 10);







function enqueue_frontend_styles()
{

    if (is_page_template('homepage.php') || is_page_template('imprint.php') || is_404()) {
        wp_enqueue_style(
            'header-style', // Unique handle for stylesheet
            get_stylesheet_directory_uri() . '/css/header.css', // Path to CSS file
            array(), // Dependencies (leave empty if none)
            '1.0', // Version
            'all' // Media type
        );
    }
    if (is_page_template('homepage.php')) {
        wp_enqueue_style(
            'homepage-style',
            get_stylesheet_directory_uri() . '/css/homepage.css',
            array(),
            '1.0',
            'all'
        );
    } else if (is_page_template('fictional-estates-map.php') || is_singular('house') || (is_post_type_archive('house'))) {
        wp_enqueue_style(
            'fictional-estates-style',
            get_stylesheet_directory_uri() . '/css/fictional-estates.css',
            array(),
            '1.0',
            'all'
        );
    } else if (is_page_template('to-do-list.php')) {
        wp_enqueue_style(
            'to-do-list-style',
            get_stylesheet_directory_uri() . '/css/to-do-list.css',
            array(),
            '1.0',
            'all'
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_frontend_styles');




function enqueue_house_cpt_admin_styles()
{
    $screen = get_current_screen();
    if ($screen && $screen->post_type === 'house') {
        wp_enqueue_style(
            'house-cpt-admin-style',
            get_stylesheet_directory_uri() . '/css/house-cpt-admin.css',
            [],
            '1.0',
            'all'
        );
        wp_enqueue_script(
            'house-cpt-admin-script',
            get_stylesheet_directory_uri() . '/js/house-cpt-admin.js',
            [],
            null,
            true
        );
    }
}
add_action('admin_enqueue_scripts', 'enqueue_house_cpt_admin_styles');





function enqueue_js_scripts()
{
    if (is_page_template('homepage.php')) {
        wp_enqueue_script(
            'homepage-script',
            get_stylesheet_directory_uri() . '/js/homepage.js',
            [],
            null,
            true
        );
    } else if (is_page_template('to-do-list.php')) {
        wp_enqueue_script(
            'to-do-list-script',
            get_stylesheet_directory_uri() . '/js/to-do-list.js',
            [],
            null,
            true
        );
    } else if (is_page_template('fictional-estates-map.php') || is_singular('house')) {
        global $post;
        $latitude = get_post_meta($post->ID, 'latitude', true);
        $longitude = get_post_meta($post->ID, 'longitude', true);
        wp_enqueue_script(
            'fictional-estates-map-script',
            get_stylesheet_directory_uri() . '/js/fictional-estates-map.js',
            [],
            null,
            true
        );

        wp_localize_script('fictional-estates-map-script', 'houseCoordinates', [
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);



        wp_enqueue_script(
            'google-maps-api',
            // This Api-Key is restricted to be used on https://olivia-metz.com and https://oliviametz.github.io/ only
            'https://maps.googleapis.com/maps/api/js?key=AIzaSyD6vVoG1502T8tMm9fX7_n3oSZUZUsJe_E&loading=async&callback=initMap',
            [],
            null,
            true
        );

        // For async map loading

        add_filter('script_loader_tag', function ($tag, $handle) {
            return $handle === 'google-maps-api' ? str_replace(' src', ' async src', $tag) : $tag;
        }, 10, 2);
    }
}
add_action('wp_enqueue_scripts', 'enqueue_js_scripts');




function add_custom_footer_comment()
{
    if (is_page_template('fictional-estates-map.php') || is_singular('house')) {
        echo '<!-- This Api-Key is restricted to be used on https://olivia-metz.com and https://oliviametz.github.io/ only -->';
    };
}
add_action('wp_footer', 'add_custom_footer_comment', 100);








// House Custom Post Type //



function register_house_post_type()
{
    $args = array(
        'labels'      => array(
            'name'          => __('Häuser'),
            'singular_name' => __('Haus')
        ),
        'public'      => true,
        'has_archive' => true,
        'supports'    => array('title', 'editor'),
        'rewrite'     => array('slug' => 'häuser'),
        'menu_position' => 5,
        'menu_icon'   => 'dashicons-admin-home',
    );
    register_post_type('house', $args);
}
add_action('init', 'register_house_post_type');


function add_house_cpt_meta_boxes()
{
    add_meta_box(
        'house_features_meta_box', // ID
        'Eigenschaften', // Title
        'show_house_features_meta_box', // Callback function
        'house', // Post type
        'normal', // Context
        'high' // Priority
    );

    add_meta_box(
        'house_images_meta_box',
        'Bilder',
        'show_house_images_meta_box',
        'house',
        'normal',
        'high'
    );

    add_meta_box(
        'house_coordinates_meta_box',
        'Koordinaten',
        'show_house_coordinates_meta_box',
        'house',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_house_cpt_meta_boxes');



function show_house_features_meta_box($post)
{


    wp_nonce_field(basename(__FILE__), 'house_features_nonce');




    // Define the house features

    $house_features = [
        'number_of_bedrooms' => 'Schlafzimmer',
        'number_of_kitchens' => 'Küchen',
        'number_of_bathrooms' => 'Badezimmer',
        'number_of_toilets' => 'Gäste-WC',
        'number_of_floors' => 'Stockwerke',
        'living_space' => 'Wohnfläche in qm',
        'garden_size' => 'Garten in qm',
    ];



    // Generate house feature inputs

    echo '<div id="house-features">';

    foreach ($house_features as $feat_key => $feat_label) {
        $current_input_value = get_post_meta($post->ID, $feat_key, true);
        echo '<div>';
        echo '<p><label for="' . $feat_key . '">';
        echo  esc_html($feat_label);
        echo '</label><br>';
        echo '<input min="0" type="number" step="0.01" id="' . $feat_key . '" name="' . $feat_key . '" value="' . esc_attr($current_input_value) . '" /></p>';
        echo '</div>';
    }

    echo '</div>';
}



function show_house_coordinates_meta_box($post)
{


    wp_nonce_field(basename(__FILE__), 'house_coordinates_nonce');



    // Define the house coodrinate partials
    $coordinate_partials = [
        'longitude' => 'Längengrad',
        'latitude' => 'Breitengrad',
    ];


    // Generate house coordiates inputs

    echo '<div id="house-coordinates">';

    foreach ($coordinate_partials as $key => $label) {
        $saved_input_value = get_post_meta($post->ID, $key, true);
        echo '<div>';
        echo '<p><label for="' . $key . '">';
        echo  esc_html($label);
        echo '</label><br>';
        echo '<input id="' . $key . '" name="' . $key . '" value="' . esc_attr($saved_input_value) . '" /></p>';
        echo '</div>';
    }

    echo '<p>Die Koordinaten der Adresse des Hauses können Sie hier ermitteln:<br><a target="_blank" href="https://www.gpskoordinaten.de/">https://www.gpskoordinaten.de/</a></p>';

    echo '</div>';
}



function show_house_images_meta_box($post)
{

    wp_nonce_field(basename(__FILE__), 'house_images_nonce');

    $house_images = get_post_meta($post->ID, 'house_images', true);
    $image_ids = !empty($house_images) ? explode(',', $house_images) : [];



    echo '<div id="house-images-container">';


    if (!empty($image_ids)) {
        foreach ($image_ids as $image_id) {
            echo '<div class="gallery-item">
                    <img src="' . wp_get_attachment_url($image_id) . '" class="gallery-img" id="' . $image_id . '">
                    <button class="remove-image">✖</button>
                  </div>';
        }
        echo '</div>';
        echo '<input type="hidden" id="house_images" name="house_images" value="';
        echo esc_attr(implode(',', $image_ids));
        echo '">';
    } else {
        echo '</div>';
        echo '<input type="hidden" id="house_images" name="house_images" value="">';
    }


    echo '<button id="upload-button" class="button">Bilder hochladen oder aus der Gallerie hinzufügen</button>';
}




function save_house_cpt_meta_boxes_data($post_id)
{
    // Check if our nonce is set and verify that the request is coming from our form.
    if (!isset($_POST['house_features_nonce']) || !wp_verify_nonce($_POST['house_features_nonce'], basename(__FILE__))) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions.
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }



    // Define the house features
    $house_features = [
        'number_of_bedrooms' => 'Schlafzimmer',
        'number_of_kitchens' => 'Küchen',
        'number_of_bathrooms' => 'Badezimmer',
        'number_of_toilets' => 'Gäste-WC',
        'number_of_floors' => 'Stockwerke',
        'living_space' => 'Wohnfläche in qm',
        'garden_size' => 'Garten in qm',
    ];

    // Sanitize and save the number of rooms. Ensure it's a float.

    foreach ($house_features as $key => $label) {
        if (isset($_POST[$key])) {
            $house_feature_value = floatval($_POST[$key]);
            update_post_meta($post_id, $key, $house_feature_value);
        }
    }




    // COORDINATES


    if (!isset($_POST['house_coordinates_nonce']) || !wp_verify_nonce($_POST['house_coordinates_nonce'], basename(__FILE__))) {
        return;
    }


    $coordinate_partials = [
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
    ];


    foreach ($coordinate_partials as $key => $label) {
        if (isset($_POST[$key])) {
            $house_coordinate_value = floatval($_POST[$key]);
            update_post_meta($post_id, $key, $house_coordinate_value);
        }
    }




    if (!isset($_POST['house_images_nonce']) || !wp_verify_nonce($_POST['house_images_nonce'], basename(__FILE__))) {
        return;
    }




    // IMAGES


    if (isset($_POST['house_images']) && !empty($_POST['house_images'])) {
        // Sanitize the input data
        $house_images = sanitize_text_field($_POST['house_images']);
        // Update the meta field in the database
        update_post_meta($post_id, 'house_images', $house_images);
    } else {
        // If no gallery data, delete the meta key
        delete_post_meta($post_id, 'house_images');
    }
}

add_action('save_post', 'save_house_cpt_meta_boxes_data');
