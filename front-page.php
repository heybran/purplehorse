<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purplehorse
 */

use Timber\Timber;

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

// Initialize Timber.
Timber::init();
$context = Timber::context([
	/**
	 * @link https://timber.github.io/docs/v2/guides/context/#setting-variables-in-the-context
	 * Setting up menu variable, so inside twig template, we can just {{ menu }},
	 * to render the site menu, but it would be better to hook into global context:
	 * @link https://timber.github.io/docs/v2/guides/context/#setting-variables-in-the-context
	 *
	 * wp_nav_menu() echo output directly as `echo` variable is default to true,
	 * for timber to work, we need to return the output instead of echoing the output.
	 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/#parameters
	 */
	'menu' => wp_nav_menu(['theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'echo' => false])
]);
Timber::render('front-page.twig', $context);
