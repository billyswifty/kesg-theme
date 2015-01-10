<?php get_header(); ?>

<div class="sidebar-content-wrapper">

<div class="page-content-wrapper constrain">

  <div class="page-banner">
    <h1 class="top-page-title">Behind KESG</h1>
  </div>

  <div class="wp-page-content blog-index">
<!-- 
      <h2>Recent Blog Posts</h2> -->

      <?php get_template_part('loop'); ?>

      <?php get_template_part('pagination'); ?>

</div>

</div>

<?php get_sidebar(); ?>

</div>



<?php get_footer(); ?>




