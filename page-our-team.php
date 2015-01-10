<?php get_header(); ?>

<div class="sidebar-content-wrapper">


<div class="page-content-wrapper constrain">

<div class="page-banner" style="margin-bottom: 40px;">
    <h1 class="top-page-title"><?php the_title(); ?></h1>
  </div>

<div class="liquid-slider" id="our-team-slider">


  <?
  global $post;
  $myposts = get_posts(array(
  'numberposts' => 12,
  'post_type' => 'staff'
));
  foreach($myposts as $post) :
    setup_postdata( $post );
?>
<? $post_id = $post->ID; ?>
<div class="staff-member slide" id="slide1" data-sort="<? the_field("sort_order", $post_id); ?>">
    <div class="constrain">
      <div class="title">
        <img src="<? the_field("photo", $post_id); ?>" alt="<? the_field("staff-name", $post_id); ?>">
      </div>
      <h1><? the_field("staff-name", $post_id); ?></h1>
      <h3><? the_field("staff-title", $post_id); ?></h3>
      <div><? the_field("bio", $post_id); ?></div>

      <div class="social-icons">
        <? $fb = get_field("facebook_url", $post_id); ?>
        <? if ($fb != "") { ?>
          <a class="st-icon-facebook-alt st-icon-circle" href="<?= $fb ?>" target="_blank"></a>
        <? } ?>
        <? $tw = get_field("twitter_url", $post_id); ?>
        <? if ($tw != "") { ?>
          <a class="st-icon-twitter st-icon-circle" href="<?= $tw ?>" target="_blank"></a>
        <? } ?>
        <? $em = get_field("email", $post_id); ?>
        <? if ($em != "") { ?>
          <a class="st-icon-email st-icon-circle" href="mailto:<?= $em ?>" target="_blank"></a>
        <? } ?>
        <? $li = get_field("linkedin_url", $post_id); ?>
        <? if ($li != "") { ?>
          <a class="st-icon-linkedin st-icon-circle" href="<?= $li ?>" target="_blank"></a>
        <? } ?>
      </div>

    </div>
  </div>


  <? endforeach; ?>



</div>

</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
