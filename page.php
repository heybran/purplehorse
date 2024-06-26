<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purplehorse
 */

get_header();
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'page' );

    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
endwhile;
get_sidebar();
get_footer();
