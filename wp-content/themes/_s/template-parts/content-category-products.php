<?php
/**
 * Template part for displaying page content in archive.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<!-- Product Block -->
<div class="product-block col-s-12 col-m-6 col-l-4">
    <div class="content-box">
        <a href="<?php the_permalink(); ?>" data-src="<?php the_post_thumbnail_url() ?>"><span class="price"><?php the_field('price'); ?></span></a>
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <p><?php the_excerpt(); ?></p>
    </div>
</div>
<!-- // Product Block -->