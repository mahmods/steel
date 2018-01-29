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
 * @package _s
 */

get_header(); ?>

<!-- Home Header -->
<div class="home-header">
    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt=""></a>
            <a href="#" class="ti-search" data-modal="search-box"></a>
            <div class="navigation-menu">
                <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container' => false,
				) );
			?>
            </div>
        </div>
    </header>
    <!-- // Main Header -->
    <?php $about = get_page_by_path( 'about-us' ); ?>     
    <div class="hero-area">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/photos.png" alt="" class="hidden-m-down wow fadeInRight">
        <div class="container">
            <div class="row row-vCenter">
                <div class="col-s-12 col-l-7 wow">
                    <h3>Steel Factor</h3>
                    <p><?php echo get_field('our_vision', $about->ID)['caption'] ?></p>
                    <a href="<?php the_permalink($about) ?>" class="btn secondary">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Home Header -->

<!-- // Main Header -->
<div class="modal-box tornado-ui" id="search-box">
    <div class="modal-content">
        <div class="modal-head">
            Search Box
            <span class="close-modal ti-clear"></span>
        </div>
        
        <div class="modal-body form-ui">
            <form role="search" method="get" class="search-form" action="http://preview.mahacode.com/steel/">
                <input name="s" type="text" placeholder="keywords">
                <input type="submit" value="Search" class="btn primary">
            </form>
        </div>
    </div>
</div>

<!-- About Us Section -->
<div class="about-section overflow">
    <div class="container">
        <div class="row row-zCenter">
            <div class="image col-s-12 col-l-5 wow fadeInLeft">
                <a href="<?php echo get_field('home_file', $about->ID) ?>" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/image.png"><span>Download Catalogue 2018</span></a>
            </div>
            <div class="col-s-12 col-l-7 wow fadeInRight content">
                <h3>We design, build and supply the hardest steel solutions in New Zealand</h3>
                <p><?php echo get_field('our_mission', $about->ID)['caption'] ?></p>
            </div>
        </div>
        
        <div class="row">
            <?php if( have_rows('features', $about->ID) ): ?>
            <?php while( have_rows('features', $about->ID) ): the_row(); ?>
            <!-- Feature Block -->
            <div class="feature-block col-s-12 col-m-6 col-l-4 wow fadeInLeft">
                <i><img src="<?php the_sub_field('image') ?>" alt=""></i>
                <h3><?php the_sub_field('title') ?></h3>
                <p><?php the_sub_field('caption') ?></p>
            </div>
            <!-- // Feature Block -->
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- // About Us Section -->

<!-- Products Section -->
<div class="product-section overflow">
    <div class="container">
        <h2 class="section-head wow fadeInUp">Our Products</h2>
        <?php $the_query = new WP_Query( array('post_type'=>'products') ); ?>
        
        <div class="carosle-slider row wow fadeInUp">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <!-- Product Block -->
            <div class="product-block col-s-12 col-m-6 col-l-4">
                <div class="content-box">
                    <a href="<?php the_permalink() ?>" data-src="<?php the_post_thumbnail_url( 'large' ); ?>"><span class="price"><? the_field('price') ?></span></a>
                    <a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
                    <p><?php the_excerpt() ?></p>
                </div>
            </div>
            <!-- // Product Block -->
            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- // Products Section -->

<!-- Industries Section -->
<div class="industries-section overflow">
    <div class="container">
        <h2 class="section-head wow fadeInUp">Industries</h2>
        <?php $the_query = new WP_Query( array('post_type'=>'industries') ); ?>
        
        <div class="carosle-slider row wow fadeInUp">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <!-- Industrie Block -->
            <div class="industries-block col-s-12 col-m-6 col-l-4">
                <a href="<?php the_permalink() ?>" data-src="<?php the_post_thumbnail_url( 'large' ); ?>"></a>
                <a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
                <p><?php the_excerpt() ?></p>
            </div>
            <!-- // Industrie Block -->
            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- // Industries Section -->

<!-- Call To Action -->
<div class="cta-section">
    <div class="container">
        <h3><?php echo get_field('contact_area_title', $about->ID) ?></h3>
        <p><?php echo get_field('contact_area_content', $about->ID) ?></p>
        <a href="<?php get_permalink( get_page_by_title( 'contact-us' ) ) ?>" class="btn secondary round-corner">Contact US</a>
    </div>
</div>
<!-- // Call To Action -->

<!-- News Section -->
<div class="news-section overflow">
    <div class="container">
        <h2 class="section-head wow fadeInUp">Lateast News</h2>
        <?php $the_query = new WP_Query( array('category_name'=>'news') ); ?>
        <div class="carosle-slider row wow fadeInUp">
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <!-- News Block -->
            <div class="news-block col-s-12 col-m-6 col-l-4">
                <a href="<?php the_permalink() ?>" data-src="<?php the_post_thumbnail_url( 'large' ); ?>"></a>
                <a href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
                <p><?php the_excerpt() ?></p>
            </div>
            <!-- // News Block -->
            <?php endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- // News Section -->

<!-- Get In Touch -->
<div class="get-in-touch">
    <div class="container">
        <div class="row">
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
                <?php echo do_shortcode( '[contact-form-7 id="163" title="Contact Us" html_class="form-ui row"]' ); ?>
            </div>
        </div>
    </div>
</div>
<!-- // Get In Touch -->

<?php
//get_sidebar();
get_footer();