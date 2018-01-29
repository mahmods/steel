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
 * @package _s
 */

get_header(); ?>

<!-- Page Content -->
        <div class="page-content container">
            <!-- Main Info -->
            <h2 class="section-head"><?php the_title(); ?></h2>
            <img src="<?php the_post_thumbnail_url() ?>" alt="" class="fluid cover">
            <p><?php the_post(); the_content(); ?></p>
			
            
            <div class="row">
				<?php while( the_repeater_field('features') ): ?>
                <!-- Feature Block -->
                <div class="feature-block col-s-12 col-m-6 col-l-4 wow fadeInLeft">
                    <i><img src="<?php the_sub_field('image') ?>" alt=""></i>
                    <h3><?php the_sub_field('title') ?></h3>
                    <p><?php the_sub_field('caption') ?></p>
                </div>
                <!-- // Feature Block -->
				<?php endwhile; ?>
            </div>
            
            <div class="row about-info">
                <div class="col-s-12 col-l-6">
                    <h2 class="section-head">Our Vision</h2>
                    <img src="<?php echo get_field('our_vision')['image']; ?>" alt="" class="fluid cover">
                    <p><?php echo get_field('our_vision')['caption']; ?></p>
                </div>
                <div class="col-s-12 col-l-6">
                    <h2 class="section-head">Our Mission</h2>
                    <img src="<?php echo get_field('our_mission')['image']; ?>" alt="" class="fluid cover">
                    <p><?php echo get_field('our_vision')['caption']; ?></p>
                </div>
            </div>
        </div>
        <!-- // Page Content -->

<?php
get_footer();
