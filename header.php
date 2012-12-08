<!doctype html>
<html>
<head>
<script type="text/javascript">
var _speedMark = new Date();
</script>
<meta charset="utf-8" />
<title><?php if (is_single() || is_page() || is_archive()) { ?><?php wp_title('',true); ?> - <?php } bloginfo('name'); ?> </title>
	<link rel="alternate" type="application/rss+xml" title="订阅 大猫の意淫筆記 (RSS 2.0)" href="http://feed.ooxx.me/" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />

<meta property="qc:admins" content="45612266400655" />
<meta property="qc:admins" content="11424526740655" />
<meta property="qc:admins" content="114245220564176665" />
<meta property="qc:admins" content="26422157160655" />
<meta name="google-site-verification" content="DYwJVwh9ncGIKHpmwqgGxaEjz1bQRmizMb5QJObQeDk" />
<?php if (is_home()) { ?>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php } ?>
<!--[if IE 9 ]>
<meta name="application-name" content="大猫の意淫筆記" />
<meta name="msapplication-tooltip" content="大猫の意淫筆記" />
<meta name="msapplication-task" content="name=大猫说明书;action-uri=http://ooxx.me/readme;icon-uri=http://ooxx.me/favicon.ico" />
<meta name="msapplication-task" content="name=搞基百科;action-uri=http://code.sh;icon-uri=http://cdn.code.sh/favicon.ico" />
<meta name="msapplication-task" content="name=(庙)MediaTemple;action-uri=http://miao.in;icon-uri=http://cdn.miao.in/favicon.ico" />
<meta name="msapplication-navbutton-color" content="#F5A097" />
<link rel="shortcut icon" href="http://ooxx.me/favicon48.ico" type="image/x-icon" />
<![endif]-->
<?php if (is_single() or is_page()) { ?>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="canonical" href="<?php echo get_permalink($post->ID);?>" />
<?php } ?>
<?php wp_head(); ?>
	<link rel="icon" type="image/png" href="http://ooxx.me/favicon.png" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6006493-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="bgcontain">
	<a href="<?php bloginfo('url'); ?>/" title="ooxx" id="head"><?php bloginfo('name'); ?></a>
	<div id="menu">
	  <ul>
		<li class="<?php if (((is_home()) && !(is_paged())) or (is_archive()) or (is_single()) or (is_paged()) or (is_search())) { ?>current_page_item<?php } else { ?>page_item<?php } ?>"><a href="<?php echo get_settings('home'); ?>" title="OOXX">Home</a></li>
		<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
		<!-- li class="page_item"><a href="http://code.sh" title="搞基百科 - 有码的百科全书">Code.sh</a></li -->
		<li class="page_item"><a href="http://www.flickr.com/photos/daemao/" title="Flickr Daemao" target="_blank">Flickr</a></li>
		<li class="page_item"><a href="http://miao.in" target="_blank" title="MediaTemple 合租">(miao)</a></li>
	  </ul>
	</div>
	<div class="contain">