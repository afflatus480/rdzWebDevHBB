<?php get_header(); ?>
<div id="content" >
<div class="topbox">
<div class='feedlist'>
<ul>
	<li><a href="<?php bloginfo('rss2_url'); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" title="subscribe" alt="RSS"/></a></li>
	<li><a href="<?php $face = get_option('cupi_face'); echo ($face); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook.png" title="Facebook" alt="Facebook"/></a></li> 
	<li><a href="http://twitter.com/<?php $twit = get_option('cupi_twit'); echo ($twit); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" title="Twitter" alt="Twitter"/></a></li> 
	<li><a href="<?php $linkd = get_option('cupi_linkd'); echo ($linkd); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.png" title="Linkedin" alt="Linkedin"/></a></li> 
	<li><a href="<?php $yout = get_option('cupi_yout'); echo ($yout); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/youtube.png" title="Youtube" alt="Youtube"/></a></li> 

	
</ul>
</div>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		
<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>


<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>
<div class="clear"></div>

</div>

</div>

<?php endwhile; endif; ?>
</div>		


<?php get_footer(); ?>