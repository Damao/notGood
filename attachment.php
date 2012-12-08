<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

  <?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<ul class="date">
			<li class="day"><?php echo zeroise($post->ID, 3); ?></li>
			</ul>
			
			<ul class="title">	
			<li class="topic"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></li>
			<li class="postmeta">
			  <?php the_time('M') ?>
			  <?php the_time('d') ?>. Post by <?php the_author() ?>. Filed under <?php the_category(', ') ?>. <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>. <?php edit_post_link('Edit'); ?></li>
			</ul>
			<div class="clear"></div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

				<p class="meta">
					<small>
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							&raquo; You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							&raquo; Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							&raquo; You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							&raquo; Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry.','',''); ?>

					</small>
				</p>

			</div>
	  </div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no attachments matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_footer(); ?>
