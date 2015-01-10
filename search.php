<?php get_header(); ?>

<div class="sidebar-content-wrapper">


<div class="page-content-wrapper constrain">

  <div class="page-banner">
    <h1 class="top-page-title">Search Results</h1>
  </div>

 <div class="wp-page-content">

      <h3 class="search-header"><?php echo sprintf( __( 'Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h3>

      <?php get_template_part('loop'); ?>

      <?php get_template_part('pagination'); ?>

    </div>

</div>

<?php get_sidebar(); ?>

</div>



<?php get_footer(); ?>