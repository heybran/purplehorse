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

get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
<?php endwhile; ?>
    <?php if (get_next_posts_link()) : next_posts_link(); 
    endif; ?>
    <?php if (get_previous_posts_link()) : previous_posts_link(); 
    endif; ?>
<?php endif; ?>

<?php get_footer(); ?>