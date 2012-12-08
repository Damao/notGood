<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div class="maya2">
<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol> 



	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">

<h3><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>
<p><img onclick="grin(':!:')" alt=":!:" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_exclaim.gif"/> <img onclick="grin(':roll:')" alt=":roll:" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_rolleyes.gif"/> <img onclick="grin(':o')" alt=":o" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_surprised.gif"/> <img onclick="grin(':lol:')" alt=":lol:" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_lol.gif"/> <img onclick="grin(':P')" alt=":P" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_razz.gif"/> <img onclick="grin(':(')" alt=":(" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_sad.gif"/> <img onclick="grin('8O')" alt="8O" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_eek.gif"/> <img onclick="grin(':x')" alt=":x" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_mad.gif"/> <img onclick="grin(':oops:')" alt=":oops:" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_redface.gif"/> <img onclick="grin(':)')" alt=":)" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_smile.gif"/> <img onclick="grin(':?:')" alt=":?:" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_question.gif"/> <img onclick="grin(':idea:')" alt=":idea:" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_idea.gif"/> <img onclick="grin(':evil:')" alt=":evil:" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_evil.gif"/> <img onclick="grin(';)')" alt=";)" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_wink.gif"/> <img onclick="grin(':twisted:')" alt=":twisted:" src="<?php bloginfo('url'); ?>/wp-includes/images/smilies/icon_twisted.gif"/>
<small class="allowTags"><span>XHTML</span><code><?php echo allowed_tags(); ?></code></small>
</p>

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="image" src="<?php bloginfo('template_directory'); ?>/images/submit.png" id="submit" tabindex="5" value="Submit Comment" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>