<?php

/**
 * Understrap functions and definitions
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ($understrap_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}

function sitelogo()
{
	$output = '';
	$output .= '<a class="navbar-brand" aria-label="home" href="' . get_home_url() . '">';
	$custom_logo_id = get_theme_mod('custom_logo');
	$custom_logo_attr = '';
	if ($custom_logo_id) {
		$custom_logo_attr = array(
			'class' => 'custom-logo',
		);
		$image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
		if (empty($image_alt)) {
			$custom_logo_attr['alt'] = get_bloginfo('name', 'display');
		}
	}
	$output .= wp_get_attachment_image($custom_logo_id, 'full', 'false', $custom_logo_attr) . '</a>';
	echo $output;
}

add_action('after_setup_theme', 'theme_register_nav_menus');
function theme_register_nav_menus()
{
	register_nav_menu('header', 'Header Languages');
	register_nav_menu('footer', 'Footer Languages');
	add_theme_support('title-tag');
}

add_action('init', function() {
	pll_register_string('custom', 'За цей період було зроблено:');
	pll_register_string('custom', 'Створено командою:');
	pll_register_string('custom', 'Адреса:');
	pll_register_string('custom', 'Призначення платежу:');
	pll_register_string('custom', 'МФО');
	pll_register_string('custom', 'р/р');
	pll_register_string('custom', 'ЄДРПОУ');
	pll_register_string('custom', 'Завантажити');
});