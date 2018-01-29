<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<!-- Page Content -->
        <div class="page-content container">
            <!-- Main Info -->
            <h2 class="section-head">About Industry</h2>
            <div class="responsive-video cover2">
                <?php the_field('video') ?>
            </div>
            <p><?php the_content(); ?></p>

            <!-- Features -->
            <h2 class="section-head">Features</h2>
            <div class="row">
				<?php while( the_repeater_field('features') ) : ?>
                <!-- Feature Block -->
                <div class="feature-block col-s-12 col-m-6 col-l-4 wow fadeInLeft">
                    <div class="image" data-src="<?php the_sub_field('image'); ?>"></div>
                    <h3><?php the_sub_field('title'); ?></h3>
                    <p><?php the_sub_field('caption'); ?></p>
                </div>
                <!-- // Feature Block -->
                <?php endwhile; ?>
            </div>

            <!-- Body Design -->
            <h2 class="section-head xxmargin">Body Design Comparison</h2>
            <?php the_field('body_design_comparison'); ?>

            <h2 class="section-head">Gallery</h2>
			<?php 
			$images = get_field('gallery');
			if( $images ): ?>
				<div class="gallery-slider">
					<?php foreach( $images as $image ): ?>
					<div class="item"><a href="javascript:void(0)" data-src="<?php echo wp_get_attachment_url( $image['ID'], 'full' ); ?>"></a> </div>
					<?php endforeach; ?>
				</div>
				
				<div class="gallery-thumbs row">
					<?php foreach( $images as $image ): ?>
					<div class="item"><div data-src="<?php echo wp_get_attachment_url( $image['ID'], 'thumbnail' ); ?>"></div> </div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
        </div>
        <!-- // Page Content -->