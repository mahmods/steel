<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', '_s' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', '_s' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', '_s' ); ?></p>
<form role="search" method="get" class="search-form form-ui row" action="http://preview.mahacode.com/steel/">
            <div class="col-s-12 col-m-6"><input name="s" value="<?php echo get_search_query()?>" type="text" placeholder="keywords"></div>
            <div class="col-s-12 col-m-6"><input type="submit" value="Search" class="btn primary"></div>
</form>
			<?php
				//get_search_form();


		else : ?>
<form role="search" method="get" class="search-form form-ui row" action="http://preview.mahacode.com/steel/">
            <div class="col-s-12 col-m-6"><input name="s" value="<?php echo get_search_query()?>" type="text" placeholder="keywords"></div>
            <div class="col-s-12 col-m-6"><input type="submit" value="Search" class="btn primary"></div>
</form>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', '_s' ); ?></p>
			<?php
				//get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
