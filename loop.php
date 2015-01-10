<?php if (have_posts()): while (have_posts()) : the_post(); ?>


	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-index-post-wrapper clearfix">




		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blog-index-thumbnail">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>

					  <div class="author-box">
<?
        $avatar = get_author_image_url( $post->post_author ); 
        $name = get_the_author_meta('display_name');
        $html = '<img class="author-img" src="'. $avatar. '" alt="'. $name .'"/>';



  ?>
<?= $html ?>
<div class="author">
  <p class="published"><?php _e( 'Published by', 'html5blank' ); ?></p>
  <p class="author-name"><?php the_author(); ?></p>
</div>
</div>

		<div class="blog-index-text">

			<h3 class="blog-title">
				<?php the_title(); ?>
			</h3>

			<p class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
			<p class="author"><?php the_author(); ?></p>

			<div class="excerpt">
				<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
			</div>

		</div>

	</div>
</div>


<?php endwhile; ?>

<?php else: ?>


	<div>
		<h2><?php _e( "Sorry, the content you were looking for could not be found.", 'html5blank' ); ?></h2>
	</div>


<?php endif; ?>
