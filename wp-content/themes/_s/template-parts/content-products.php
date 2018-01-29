<?php
/**
 * Template part for displaying page content in single.php
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
            <div class="row row-zCenter margin-info">
                <div class="col-s-12 col-m-6">
                    <div class="responsive-video embed-container">
                        <?php the_field('video') ?>
                    </div>
                </div>
                <div class="col-s-12 col-m-6">
                    <p><?php the_content() ?></p>
                </div>
            </div>
            
            <!-- Features -->
            <h2 class="section-head">Product Feature</h2>
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
        </div>
        <!-- // Page Content -->
        
        <!-- Call To Action -->
        <?php $about = get_page_by_path( 'about-us' ); ?>
        <div class="cta-section white">
            <div class="container">
                <h3><?php echo get_field('contact_area_title', $about->ID) ?></h3>
                <p><?php echo get_field('contact_area_content', $about->ID) ?></p>
                <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn primary round-corner">Contact US</a>
            </div>
        </div>
        <!-- // Call To Action -->
        
        <!-- Page Content -->
        <div class="page-content container">
            <h2 class="section-head">Plate information</h2>
            <div class="row">
				<?php while( the_repeater_field('plate_information') ) : ?>
                <!-- Palete Block -->
                <div class="palette-block col-s-6 col-m-4 col-l-2">
                    <div class="content-box">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <a href="<?php the_sub_field('file'); ?>" class="link">Datasheet</a>
                    </div>
                </div>
                <!-- // Palete Block -->
				<?php endwhile; ?>
            </div>
            
            <div class="adtional-info">
                <h4>Adtional Informatrion <?php echo get_field('adtional_informatrion')['title']; ?></h4>
                <p><?php echo get_field('adtional_informatrion')['content']; ?></p>
            </div>
        </div>
        <!-- // Page Content -->