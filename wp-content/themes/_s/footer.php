<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

<!-- Footer -->
<footer>
<div class="container">
    <div class="row row-spec">
        <div class="col-s-12 col-l-5">
            <h3>About US</h3>
            <p><?php echo get_option('footer_about'); ?></p>
            <span class="cinfo ti-email"><?php echo get_option('email'); ?></span>
            <span class="cinfo ti-phone"><?php echo get_option('phone'); ?></span>
        </div>
        <div class="col-s-12 col-l-7">
            <h3>Site Map</h3>
<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container' => false,
				) );
			?>
        </div>
    </div>
</div>
</footer>
<div class="copyrights">
<div class="container">
    All contents © copyright   2017  Steel Factor Ltd. All rights reserved.
    <div class="mahacode-copyrights">
        <a href="http://mahacode.com/" target="_blank" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mahacode-black.png" alt=""></a>
        <div class="mc-tooltip">
            <h3>تصميم وتطوير شركة مها كود</h3>
            <h4 class="ti-email">info@mahacode.com</h4>
            <h4 class="ti-phone">+02686 4621312 14849 8789</h4>
            <div class="btns-icons">
                <a href="http://mahacode.com/" target="_blank" class="ti-home-io"></a>
                <a href="https://www.linkedin.com/company/10801558" target="_blank" class="ti-linkedin"></a>
                <a href="https://api.whatsapp.com/send?phone=00201093678012" target="_blank" class="ti-whatsapp-line"></a>
                <a href="https://www.behance.net/mahacode" target="_blank" class="ti-behance"></a>
                <a href="https://www.instagram.com/maha.code/" target="_blank" class="ti-instagram"></a>
                <a href="http://www.twitter.com/mahacode" target="_blank" class="ti-twitter"></a>
                <a href="https://www.facebook.com/MahaCode/" class="ti-facebook"></a>
            </div>
        </div>
    </div>
</div>
</div>

<?php wp_footer(); ?>

<!-- Required JS Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>$('iframe').addClass('video');</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tornado.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>