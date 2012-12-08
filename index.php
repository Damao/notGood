<?php get_header(); ?>

<div id="content" class="narrowcolumn">
<div class="adsense">
<a onclick='pgvSendClick(1)' href="http://miao.in" target="_blank"><img src="http://ooxx.me/images/blog/mtBanner.png" border="0"></a><script>typeof (_taadHolders) == 'undefined' ? _taadHolders = [] : '';_taadHolders.push('1');</script>
</div>
  <?php if(function_exists('ooxx_nav')) {ooxx_nav(); } ?>
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
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
      <div class="topic"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
        <?php the_title(); ?>
        </a>
	</div>
      <div class="postmeta">
        <?php the_time('M') ?>
        <?php the_time('d') ?>
        . Post by
        <?php the_author() ?>
        .
        <?php edit_post_link('Edit'); ?>
        .
        <?php if(function_exists('the_views')) { the_views(); } ?>
        .
        <?php comments_popup_link('Sha Fa', 'Ban Deng', '% Comments'); ?>
      </div>
    </div>
    <div class="clear"></div>
    <div class="entry">
      <?php the_content('More &#8230;&#8230;'); ?>
    </div>
    <span class="comments">
    <?php comments_popup_link('Sha Fa', 'Ban Deng', '% Comments'); ?>
    </span> </div>
  <?php endwhile; ?>
  <?php if(function_exists('ooxx_nav')) {ooxx_nav(); } ?>
  <?php else : ?>
  <h2 class="center">貌似木文章</h2>
  <p class="center">Sorry, RT.</p>
  <?php include (TEMPLATEPATH . "/searchform.php"); ?>
  <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>