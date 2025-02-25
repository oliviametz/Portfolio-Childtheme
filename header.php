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
	<nav class="d-flex justify-content-center position-sticky top-0 z-3 py-3 align-items-center text-white" id="navigation" aria-label="Hauptnavigation">
		<ul class="list-unstyled d-flex align-items-center m-0">
			<li class="mx-2 pb-1">&#9679;</li>
			<li><a href="<?php echo home_url('#about-section'); ?>" class="text-white text-decoration-none fw-semibold">ÜBER MICH</a></li>
			<li class="mx-2 pb-1">&#9679;</li>
			<li><a href="<?php echo home_url('#projects-section'); ?>" class="text-white text-decoration-none fw-semibold">PROJEKTE</a></li>
			<li class="mx-2 pb-1">&#9679;</li>
		</ul>
	</nav>