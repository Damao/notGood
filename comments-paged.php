<?php // Do not delete these lines
	if ('comments-paged.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.<p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'alt';
?>

<!-- You can start editing here. -->
<div class="maya2">
<?php if ($comments) : ?>
	</p><h3 id="comments"><?php comments_number('沙发犹在', '板凳尚存', '% Comments' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	<!-- Comment page numbers -->
	<?php if ($paged_comments->pager->num_pages() > 1): ?>
	<p class="comment-page-numbers"><?php _e("Pages:"); ?> <?php paged_comments_print_pages(); ?></p>
	<?php endif; ?>
	<!-- End comment page numbers -->

	<ol class="commentlist">

	<?php foreach ($comments as $comment) : ?>

		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

         

<cite><?php comment_author_link() ?> :</cite>
			<?php if ($comment->comment_approved == '0') : ?>
			Your comment is awaiting moderation.
			<?php endif; ?>
			<br />

			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?><?php comment_time() ?></a></small>
			
			<?php comment_text() ?>
	  </li>

	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = 'alttwo';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

<!-- Comment page numbers -->
<?php if ($paged_comments->pager->num_pages() > 1): ?>
<p class="comment-page-numbers"><?php _e("Pages:"); ?> <?php paged_comments_print_pages(); ?></p>
<?php endif; ?>
<!-- End comment page numbers -->

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<h3>看毕，沉思良久，挥键疾鼠：</h3>


        <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>你必须 <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">登录</a> 才能发表评论。</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>登录为 <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">退出 &raquo;</a></p>

<?php else : ?>
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" style="background:url(/images/blog/user_green.png) left bottom no-repeat;" />
<label for="author"> 江湖人称 <?php if ($req) echo "(required)"; ?></label>
</p>
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" style="background:url(/images/blog/email.png) no-repeat; background-position:left bottom;" />
<label for="email"> 君之信址(隐) <?php if ($req) echo "(required)"; ?></label>
</p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" style="background:url(/images/blog/world_go.png) no-repeat; background-position:left bottom;" />
<label for="url"> 君之网址 </label>
</p>

<?php endif; ?>

<!--<p id="xhtml"><small><strong>XHTML:</strong> You can use XHTML and Textile for style</small></p>-->
<?php 
if (class_exists('emotions')) { 
    emotions::bar(); 
} 
?>
<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="image" src="<?php bloginfo('template_directory'); ?>/images/submit.png" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<p>
  <?php endif; // If registration required and not logged in ?>
  
  <?php endif; // if you delete this the sky will fall on your head ?>
</p>

<p>&nbsp;</p>
</div>