<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$fields =  array(

  'author' =>
    '<div class="col-s-12 col-m-6"><input placeholder="Name'.( $req ? '*' : '' ) .'" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' />',

  'email' =>
    '<input placeholder="Email'.( $req ? '*' : '' ) .'" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' />',

  'url' =>
    '<input placeholder="Website'.( $req ? '*' : '' ) .'" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
	'" size="30" /></div>',
);

	$args = [
		'class_form' => 'form-ui row comment-form',
		'class_submit' => 'btn primary round-corner',
		'label_submit' => 'Send',
		'title_reply' => 'Add A Comment',
		'title_reply_before' => '<h2 class="section-head">',
		'title_reply_after' => '</h2>',
		'comment_notes_before' => '',
		'comment_field' => '<div class="col-s-12"><textarea placeholder="Comment" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>',
		'fields' => $fields,
	];
	comment_form($args);
?>




	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<?php the_comments_navigation(); ?>

		<div class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'div',
					'short_ping' => true,
					'callback' => function($comment, $args, $depth) {
							echo '<div class="comment-block">';
							echo '<span class="auther">Auther : '.get_comment_author_link().'</span>';
							echo '<span class="date">Date : '.get_comment_date('Y/m/d g:i A').'</span>';
							echo '<p>'.comment_text().'</p>';
							echo '</div>';
					}
				) );
			?>
		</div><!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', '_s' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().
	?>

