<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/liquid-slider.css" rel="stylesheet">
     <link href="<?php echo get_template_directory_uri(); ?>/css/sidr.css" rel="stylesheet">
      <link href="<?php echo get_template_directory_uri(); ?>/css/stackicons-social-minimal.css" rel="stylesheet">


    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        // conditionizr.config({
        //     assets: '<?php echo get_template_directory_uri(); ?>',
        //     tests: {}
        // });
        </script>

	</head>
	<body <?php body_class(); ?>>

  <div id="fullscreen-overlay" style="display:none;">
    <div class="overlay-wrapper">
      <div class="container hidden" data-card="1">
        <a href="#" id="close-overlay">X</a>
        <img src="">
        <div class="text"></div>
        <div class="buttons">
          <a href="#" id="prev" style="padding-right:10px;">&#171; previous</a>
          <a href="#" id="next" style="padding-left:10px;">next &#187;</a>
        </div>
      </div>
    </div>
  </div> 

  <div id="sidr" style="display:none;">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.png" alt="KE">
      </div>
      <div class="social-icons">
        <a class="st-icon-facebook-alt st-icon-circle" href="https://www.facebook.com/KnightEadySportsGroup" target="_blank"></a>
        <a class="st-icon-instagram st-icon-circle" href="http://www.enjoygram.com/knighteady" target="_blank"></a>
        <a class="st-icon-twitter st-icon-circle" href="https://twitter.com/KnightEady" target="_blank"></a>
        <a class="st-icon-linkedin st-icon-circle" href="https://www.linkedin.com/company/3783681?trk=tyah&trkInfo=tarId%3A1409541562223%2Ctas%3Aknight%20eady%2Cidx%3A1-1-1" target="_blank"></a>
      </div>
      <?php html5blank_nav(); ?>
    </div>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

        <div class="top">
          <div class="constrain">
  					<!-- logo -->
  					<div class="logo">
  						<a href="<?php echo home_url(); ?>">
  							<img src="<?php echo get_template_directory_uri(); ?>/img/main_logo.png" alt="Knight Eady Sports Group" class="logo-img">
  						</a>
  					</div>
  					<!-- /logo -->
            <a class="st-icon-menu st-icon-only conceal" id="show-menu"></a>
            <div class="social-icons reveal">
              <a class="st-icon-facebook-alt st-icon-circle" href="https://www.facebook.com/KnightEadySportsGroup" target="_blank"></a>
              <a class="st-icon-instagram st-icon-circle" href="http://www.enjoygram.com/knighteady" target="_blank"></a>
              <a class="st-icon-twitter st-icon-circle" href="https://twitter.com/KnightEady" target="_blank"></a>
              <a class="st-icon-linkedin st-icon-circle" href="https://www.linkedin.com/company/3783681?trk=tyah&trkInfo=tarId%3A1409541562223%2Ctas%3Aknight%20eady%2Cidx%3A1-1-1" target="_blank"></a>
            </div>
          </div>
        </div>
        <div class="bottom">
          <div class="constrain">
  					<!-- nav -->
  					<nav class="reveal nav" role="navigation">
  						<?php html5blank_nav(); ?>
  					</nav>
  					<!-- /nav -->
          </div>
        </div>

			</header>
			<!-- /header -->

      
