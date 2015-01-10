<?php get_header(); ?>

<div class="sidebar-content-wrapper">

<div class="page-content-wrapper constrain">

  <div class="page-banner">
    <h1 class="top-page-title"><?php the_title(); ?></h1>
  </div>

  <div id="map-canvas" style="width:100%;height:400px;margin-bottom:30px;"></div>

  <div class="contact-content" style="text-align:center;">
    <h3>Knight Eady Sports Group</h3>
    <h4>Located at the Innovation Depot</h4>
    <p>1500 1st Ave N, Unit 99,<br />
Birmingham, AL 35203<br />
Phone: 205.307.6660</p>
<br />
<p>Interested in becoming an AHSAA Corporate Sponsor?<br /> Contact Mike Vest (<a href="mailto:mike@knighteady.com">mike@knighteady.com</a>)</p>
<p>Interested in becoming a sponsor for Knight Eady events?<br /> Contact David Knight (<a href="mailto:david@knighteady.com">david@knighteady.com</a>)</p>

  </div>

<?php the_content(); ?>

</div>

<?php get_sidebar(); ?>

</div>



<?php get_footer(); ?>


<style>
#map-canvas img {
  max-width: none;
}
</style>



<script type='text/javascript'>

var mapCanvasId, mapCenterLat, mapCenterLng, mapDefaultZoom;
var map_style = [{"featureType":"water","stylers":[{"color":"#01a0af"},{"visibility":"on"}]},{"featureType":"landscape","stylers":[{"color":"#f2f2f2"}]},{"featureType":"road","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]}];
      
mapCanvasId = "map-canvas";
mapCenterLat = 33.511753;
mapCenterLng = -86.812531;
mapDefaultZoom = 16;
mapInfoText = "Knight Eady Office"; 
mapInfoWindow = "<p style='text-align:center;'>Knight Eady Office<br />1500 1st Ave N, Unit 99,<br />Birmingham, AL 35203</p>";

function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(mapCenterLat, mapCenterLng),
    scrollwheel: false,
    zoom: mapDefaultZoom,
    styles: map_style
  };
  var map = new google.maps.Map(document.getElementById(mapCanvasId), mapOptions);

  var marker = new google.maps.Marker({
    position: {lat: mapCenterLat, lng: mapCenterLng},
    map: map
  });

    var info = new google.maps.InfoWindow({
      content: mapInfoWindow
    });

    info.open(map, marker);

    google.maps.event.addListener(marker, 'click', function() {
      info.open(map,marker);
    });

}

function loadScript() {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = "https://maps.googleapis.com/maps/api/js?v=3key=AIzaSyDENedoxisMHbY-o895uaR7xp_bPFHo-24&sensor=false&callback=initialize";
  document.body.appendChild(script);
}

window.onload = loadScript;

</script>