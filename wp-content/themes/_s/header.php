<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <!-- Required CSS Files -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/tornado.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animations.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
</head>

<body>
<?php if(!is_home()) : ?>
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

<!-- Page Head -->
<div class="page-head">
    <div class="container">
        <h1><?php wp_title(''); ?></h1>
            <?php the_breadcrumb(); ?>
    </div>
</div>
<!-- // Page Head -->
<?php endif; ?>