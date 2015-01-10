<?php get_header(); ?>

<div class="sidebar-content-wrapper">

<div class="page-content-wrapper constrain">

  <div class="page-banner">
    <h1 class="top-page-title"><?php the_title(); ?></h1>
  </div>

  <div class="wp-page-content">
  
  <?php woocommerce_content(); ?>

</div>

</div>

<?php get_sidebar(); ?>

</div>



<?php get_footer(); ?>




