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
            <h2 class="section-head"><?php the_title() ?></h2>
            <img src="<?php the_post_thumbnail_url('full') ?>" alt="" class="fluid cover2">
            <p><?php the_content(); ?></p>
			
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
			
			<?php if(get_field('content_after_gallery')) : ?>
            	<p><?php the_field('content_after_gallery') ?></p>
            <?php endif; ?>
			
            <div class="info-bar">
                <span>Auther : <?php the_author(); ?></span>
                <span>Comments : <?php echo get_comments_number(); ?></span>
                <span>Date : <?php the_date('Y/m/d g:i A'); ?></span>
                
                <div class="social">
                    <a href="#" class="ti-facebook"></a>
                    <a href="#" class="ti-twitter"></a>
                    <a href="#" class="ti-googleplus"></a>
                    <a href="#" class="ti-linkedin"></a>
                </div>
            </div>
			
			<?php 
// If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
?>
        </div>
        <!-- // Page Content -->