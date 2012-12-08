<?php
/*
Template Name: Guestbook
*/
?>
<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<ul class="date">
			<li class="day"><?php the_time('d') ?></li>
			<li class="month"><?php the_time('M') ?></li>
			</ul>
			<ul class="title">	
			<li class="topic"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
			<li class="postmeta">Post by <?php the_author() ?>. Filed under <?php the_category(', ') ?>. <?php edit_post_link('Edit'); ?></li>
			</ul>
			
			<div class="clear"></div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

				<p class="meta">
					<small>
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							&raquo; You can <a href="#respond">leave a comment</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							&raquo; Comments are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							&raquo; You can skip to the end and leave a comment. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							&raquo; Both comments and pings are currently closed.

						<?php } edit_post_link('Edit.','',''); ?>

					</small>
				</p>

			</div>
		</div>

	<?php comments_template('/guestcomments.php'); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
