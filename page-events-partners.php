<?php get_header(); ?>

<div class="sidebar-content-wrapper">

<div class="page-content-wrapper constrain">

  <div class="page-banner">
    <h1 class="top-page-title"><?php the_title(); ?></h1>
  </div>


  <div class="wp-page-content event-logos">

<p style="text-align:center;">Click on each logo to read more about Knight Eady's relationship with the event or partner.</p>
    
    

      <?
  global $post;
  $myposts = get_posts(array(
  'numberposts' => 12,
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'post_type' => 'partner'
));

  $count = 0; 

  foreach($myposts as $post) :
    setup_postdata( $post );
?>
<? $post_id = $post->ID; ?>

  <? $count = $count + 1 ?>
  <div class="logo-container">
    <div class="logo-holder">
      <div style="display:block;cursor:pointer;" class="logo-link" id="<? the_field("name", $post_id); ?>" data-card="<?= $count ?>">
        <img class="logo-image" src="<? the_field("logo", $post_id); ?>" alt="<? the_field("name", $post_id); ?>">
        <div class="logo-text" style="display:none;">
          <? the_field("description", $post_id); ?>
        </div>
      </div>
    </div>
  </div>


  <? endforeach; ?>



</div>

</div>

<?php get_sidebar(); ?>

</div>



<?php get_footer(); ?>



