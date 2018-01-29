<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header(); ?>



<!-- Page Content -->
<div class="page-content container">
<?php if ( have_posts() ) : ?>
    <div id="main" class="row">
    <?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-category', get_post_type() );
				endwhile;
?>
		</div>
		<?php
//wp_custom_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
    
</div>
<!-- // Page Content -->
<?php
get_footer();
