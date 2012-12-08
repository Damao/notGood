<?php get_header(); ?>
<div class="fn_previousNext">
	<div class="h" titile="上一篇"><?php previous_post_link('%link', '&larr;'); ?></div>
	<div class="l" title="下一篇"><?php next_post_link('%link', '&rarr;'); ?></div>
</div>
<div id="content" class="narrowcolumn">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
  <div class="post" id="post-<?php the_ID(); ?>">
    <div class="date">
      <div class="day">
        <?php the_time('d') ?>
      </div>
      <div class="month">
        <?php the_time('M') ?>
      </div>
    </div>
    <div class="title">
      <div class="topic">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
	<div class="postmeta">
        <?php the_time('l, Y') ?>
        By
        <?php the_author() ?>
        . under
        <?php the_category(', ') ?>
        <?php edit_post_link('Edit'); ?>.<?php if(function_exists('the_views')) { the_views(); } ?>
	</div>
    </div>
    <div class="entry">
<div class="adsense">
<a onclick='pgvSendClick(2)' href="http://miao.in" target="_blank"><img src="http://ooxx.me/images/blog/mtBanner.png" border="0" /></a><script>typeof (_taadHolders) == 'undefined' ? _taadHolders = [] : '';_taadHolders.push('2');</script>
</div>
      <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
<div id="loading">假装异步加载ing</div>
      <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
      <div id="entryRest">
<p class="blueBorder"> <a href="http://feed.ooxx.me" target="_blank">订阅大猫的RSS feed</a>,不错过一部AV~ </p>
<div style="clear:both;"><a href="/readme"><img class="floatR" src="<?php bloginfo('template_directory'); ?>/images/goodluckRabbit.gif" alt="yeah, bigCat made it!" /></a>
<?php if(function_exists('wp_related_posts')) { wp_related_posts(); } ?>
</div>
</div>
      <p class="meta"> <small>
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
        </small> </p>
    </div>
  </div>
  <?php comments_template(); ?>
  <?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>