<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<!-- #post-<?php the_ID(); ?> -->
<div id="post-<?php the_ID(); ?>" class="news-block col-s-12 col-m-6 col-l-4">
    <a href="<?php the_permalink(); ?>" data-src="<?php the_post_thumbnail_url() ?>"></a>
    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
    <p><?php the_excerpt(); ?></p>
</div>
<!-- #post-<?php the_ID(); ?> -->