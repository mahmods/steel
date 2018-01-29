<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>

<!-- Error Page -->
<div class="error404">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.png" alt="">
    <p>The Page You are Looking For Cannot be Not Found <br> <a href="#">Click Here To Contact US</a></p>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn primary rounded">Home Page</a>
</div>
<!-- // Error Page -->

<?php
get_footer();
