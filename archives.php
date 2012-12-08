<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="narrowcolumn">

<div class="entry">
<?php if (function_exists('af_ela_super_archive')) { ?>

<h2><?php _e('Live Archives'); ?></h2>
<p><?php printf(__('This is a \'live archive\', which allows you to \'dig\' into the %s repository in a fast an efficient way, without having to reload this page as you explore.'), get_bloginfo('name')) ?> </p>

<?php af_ela_super_archive('num_posts_by_cat=50&truncate_title_length=40&hide_pingbacks_and_trackbacks=1&num_entries=1&num_comments=1&number_text=<span>%</span>&comment_text=<span>%</span>&selected_text='.urlencode('')); ?>

<?php } ?>

</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
