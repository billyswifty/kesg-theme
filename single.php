<?php get_header(); ?>

<div class="sidebar-content-wrapper">

<div class="page-content-wrapper constrain">

  <div class="page-banner">
    <h1 class="top-page-title">Behind KESG</h1>
  </div>


<div class="wp-page-content">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>



<div class="blog-content-wrapper">

<div class="blog-featured-image">
<?= the_post_thumbnail( "large", $attr ); ?> 
</div>


<h1 class="blog-title"><span><?php the_title(); ?></span></h1>
<div class="post-meta">
  <?
        $avatar = get_author_image_url( $post->post_author ); 
        $name = get_the_author_meta('display_name');
        $html = '<img class="author-img" src="'. $avatar. '" alt="'. $name .'"/>';
  ?>
<?= $html ?>
      <p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
      <p class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author(); ?></p>
</div>
      <div class="blog-content"><?php the_content(); // Dynamic Content ?></div>
  </div>

<div class="share-btns clearfix"> 
  <h2>Share this article:</h2>      
  <!-- Twitter  -->
  <div id="twitter"><a href="https://twitter.com/share" class="twitter-share-button"    
    data-text="<?php the_title(); ?>"
    data-count="horizontal"
    data-lang="en">Tweet</a></div> 
  <!-- Google Plus --> 
  <div id="gplus">
    <g:plusone size="medium" data-annotation="bubble">
    </g:plusone>
  </div>
  <!-- Facebook -->
  <div id="facebook" class="fb-share-button" 
    data-type="button"></div>
</div>




			


	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

</div>


</div>

</div>

<?php get_sidebar(); ?>

</div>



<?php get_footer(); ?>

<script id='facebook-jssdk' src='//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=359029774249180&version=v2.0'></script>
<script id='twitter-wjs' src='https://platform.twitter.com/widgets.js'></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>




