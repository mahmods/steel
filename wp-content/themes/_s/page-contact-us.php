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
    <div class="responsive-map">
        <iframe class="map" width="600" height="450" src="<?php echo get_option('map'); ?>" allowfullscreen></iframe>
    </div>
    
    <div class="row get-in-touch">
        <div class="col-s-12 col-m-5 col-l-4">
            <h2 class="section-head">Get In Touch</h2>
            
            <!-- Contact Info -->
            <div class="contact-info table-style">
                <i class="ti-map-marker"></i>
                <div class="info">
                    <h3>Our Factory</h3>
                    <p><?php echo get_option('address'); ?></p>
                </div>
            </div>
            <!-- // Contact Info -->
            
            <!-- Contact Info -->
            <div class="contact-info table-style">
                <i class="ti-email-io"></i>
                <div class="info">
                    <h3>Email Address</h3>
                    <p><?php echo get_option('email'); ?></p>
                </div>
            </div>
            <!-- // Contact Info -->
            
            <!-- Contact Info -->
            <div class="contact-info table-style">
                <i class="ti-settings-phone"></i>
                <div class="info">
                    <h3>Phone Number</h3>
                    <p><?php echo get_option('phone'); ?></p>
                </div>
            </div>
            <!-- // Contact Info -->
        </div>
        <div class="col-s-12 col-m-7 col-l-8">
            <?php the_post(); the_content(); ?>
        </div>
    </div>
</div>
<!-- // Page Content -->

<?php
get_footer();