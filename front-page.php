<?php get_header(); ?>

<div class="home-wrapper">

<div class="liquid-slider" id="home-slider">
  
  <div class="slide" id="slide3">
    <a href="/kings-of-the-court-basketball-showcase" class="full-link"></a>
    <h2 class="title" style="display:none;">Kings of the Court</h2>
    <!-- <div class="article right" style="padding-top:90px;">
      <h2 class="title" style="display:none;"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/strategic_communications.png"><span>Strategic Communications</span></h2>
      <h2 class="article-title"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/strategic_communications.png">Strategic<br /> Communications</h2>
    </div> -->
  </div>
  <div class="slide" id="slide1">
    <a href="/border-wars" class="full-link"></a>
    <h2 class="title" style="display:none;">Border Wars</h2>
    <!-- <div class="article left" style="padding-top:90px;">
      <h2 class="title" style="display:none;"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/event_operations.png"><span>Event Operations and Consulting</span></h2>
      <h2 class="article-title"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/event_operations.png">Event Operations<br /> and Consulting</h2>
    </div> -->
  </div>
  <div class="slide" id="slide2">
    <a href="http://www.elevatethestage.com/" target="_blank" class="full-link"></a>
    <h2 class="title" style="display:none;">Elevate the Stage</h2>
    <!-- <div class="article left" style="padding-top:90px;">
      <h2 class="title" style="display:none;"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/event_consulting.png"><span>Sponsorship Sales and Activation</span></h2>
      <h2 class="article-title"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/event_consulting.png">Sponsorship <br />Sales and Activation</h2>
    </div> -->
  </div>


</div>



<div class="mission-banner constrain">
  <div class="">
    <p><span class="highlight">Knight Eady</span> commits to providing platforms for 
      <span class="big">student-athletes</span>, <span class="big">competitors</span>, 
      and <span class="big">sports enthusiasts</span> to have unforgettable and unique 
      experiences through athletic competition. We believe in motivating and <span class="big">inspiring</span> individuals 
      to reach <span class="highlight">beyond their potential</span> and develop an unparalleled loyalty and passion 
      for their sport. We are able to do this by delivering <span class="big">quality</span>, 
      <span class="big">consistent</span>, <span class="big">cost efficient</span> and <span class="big">creative services</span>
       while applying ethical principles that <span style="font-style:italic;">radically 
      exceed expectations</span>.</p>
  </div>
</div>

<div class="twitter-feed constrain">
  <div class="">
    <div class="top">
     <div class="st-icon-twitter st-icon-only"></div>
<!--       <span>@KnightEady</span> -->
    </div>
    <div class="tweet">
      <?= do_shortcode("[tweets username='KnightEady' nb='1' avatar='0' cache='3600' links='0']"); ?>
    </div>
    <a href="https://twitter.com/KnightEady" target="_blank" class="dark btn">Follow Us</a>
  </div>
</div>

<script>
var oldtext = jQuery(".juiz_last_tweet_inner.juiz_last_tweet_metadata").html();
var newtext = oldtext.replace("Time ago ","");
jQuery(".juiz_last_tweet_inner.juiz_last_tweet_metadata").html(newtext);
</script>

<div class="what-we-do">
  <div class="wwdtitle constrain">
    <h2>What We Do</h2>
  </div>
  <div class="section left">
    <div class="constrain">
      <div class="image-holder">
        <div class="service-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticket.png" alt="Event Operations and Consulting">
        </div>
      </div>
      <div class="text">
        <h3>Event Operations and Consulting</h3>
        <p>Knight Eady operates events of all sizes in the sports industry. Knight Eady serves high schools, universities, sports organizations, and multi-purpose facilities by securing, promoting, and managing events. By partnering with clients, Knight Eady operates events cost efficiently and effectively while creating an exceptional experience for all constituents. Knight Eady also provides event consulting with the primary goal of creating a better experience for all athletes, fans, and attendees involved. With the staff’s experience in the sports industry along with creative perspectives regarding new trends, Knight Eady will assist our partners with the planning and execution phases of an event.</p>

      </div>
    </div>
  </div>
  <div class="section right">
    <div class="constrain">
      <div class="image-holder">
        <div class="service-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/bullhorn.png" alt="Strategic Communications">
        </div>
      </div>
      <div class="text">
        <h3>Strategic Communications</h3>
        <p>Knight Eady values the importance of quality and consistent marketing and communication. Our team can create or redefine primary and secondary marks, set guidelines in place for brand consistency, and provide strategy for effective and efficient messaging. In managing a special project or marketing campaign, Knight Eady can also provide creative services in order to maximize the potential of the client's communication.</p>

      </div>
    </div>
  </div>
  <div class="section left">
    <div class="constrain">
      <div class="image-holder">
        <div class="service-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/graph.png" alt="Sponsorship Sales and Activation">
        </div>
      </div>
      <div class="text">
        <h3>Sponsorship Sales and Activation</h3>
        <p>Knight Eady has developed a strong resume over the course of the last year as it relates to sponsorship sales and activation. The team dedicates a great amount of time and energy to developing relationships with new sponsorships for our partners and clients in order to grow resources, excitement and reach for their events. Just as important to Knight Eady is maintaining a positive relationship with the existing corporate sponsors in order to make sure that they are getting the most out of their sponsorships. Knight Eady believes that a sponsorship is so much more than just donating money or having the presence of a logo at an event. It is about making an emotional connection with the fans and players by activating and instilling their brand into the core of their lives.</p>

      </div>
    </div>
  </div>
  
</div>



<div class="constrain latest-wrapper">



  <div class="latest-stuff-wrapper">
  <div class="event-posts">

<!-- <h1 class="section-title">Upcoming Events</h1> --> 

<? // do_shortcode("[event-list show_filterbar=false link_to_event=false num_events=3]"); ?>


  <div class="instagram-homepage">
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
  </div>

  </div>


<div class="news-posts">

<h1 class="section-title">Behind KESG</h1>
<?
  global $post;
  $myposts = get_posts('numberposts=2');
  foreach($myposts as $post) :
    setup_postdata( $post );
?>
    <div class="post-container">
      
      <?

        $avatar = get_author_image_url( $post->post_author ); 
        $name = get_the_author_meta('display_name');
        $html = '<img class="author-img" src="'. $avatar. '" alt="A Picture of '. $name .'"/>';
        echo $html;
        echo "<h1 class='author-name'>"; 
        the_author(); 
        echo "</h1>"; 
        echo "<h2 class='time'>"; 
        the_time('F jS, Y'); 
        echo "</h2>"; 

        echo "<h3 class='title'>"; 
        the_title();
        echo "</h3>"; 
     //   the_content(); 
      ?>

      <a href="<? the_permalink() ?>" class="link">Read More</a>

      <br /> 
    </div>
  <? endforeach; ?>

</div>
</div>
</div>

</div>

<?php get_footer(); ?>