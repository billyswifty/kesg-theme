<?php get_header(); ?>

<div class="sidebar-content-wrapper">

<div class="page-content-wrapper constrain">

  <div class="page-banner">
    <h1 class="top-page-title"><?php the_title(); ?></h1>
  </div>


  <div class="puzzle-container">

    <p class="instructions reveal">Click on each piece to read more about the core value.</p>

    <div class="puzzle-wrapper reveal">
      <div class="piece" id="piece-1"></div> <!-- servants --> 
      <div class="piece" id="piece-2"></div> <!-- create --> 
      <div class="piece" id="piece-3"></div> <!-- value --> 
      <div class="piece" id="piece-4"></div> <!-- innovate --> 
      <div class="piece" id="piece-5"></div> <!-- growth --> 
      <img id="blank" src="<?php echo get_template_directory_uri(); ?>/img/blank.png" usemap="#puzzle-map">
      <?
        $scale = 0.5;

        $coords_1 = [181,278,3,556,134,559,281,334,439,333,441,311,432,299,405,289,395,281,400,271,427,258,450,258,466,267,495,288,502,271,511,242,503,233,484,241,472,252,461,252,456,244,456,229,460,208,459,198,445,192,445,222,437,223,444,236,441,241,422,241,414,248,394,234,378,229,369,238,369,246,378,254,382,264,367,274,356,283,347,287,336,283,320,275,315,274,313,259,311,248,304,242,296,239,286,251,279,258,281,273,281,281,263,281,247,274,235,264,230,250,230,241,219,225,206,223,201,240,201,259,197,271];
        foreach ($coords_1 as &$coord) {
          $coord = $coord * $scale; 
        }
        $coords_1_string = implode(",",$coords_1);

        $coords_2 = [998,557,445,558,445,317,442,304,427,294,411,289,397,278,413,266,436,260,457,267,482,289,496,289,502,281,508,266,520,264,526,277,515,286,493,299,496,312,499,338,512,340,538,326,551,320,557,341,552,449,557,446,926,444];
        foreach ($coords_2 as &$coord) {
          $coord = $coord * $scale; 
        }
        $coords_2_string = implode(",",$coords_2);

        $coords_3 = [854,335,562,334,552,321,543,316,532,322,520,333,505,342,499,336,501,315,496,302,514,294,528,282,532,272,523,264,511,258,514,242,512,231,499,230,482,240,464,250,457,241,459,220,463,203,460,194,444,188,445,126,457,133,457,148,454,164,459,181,468,199,489,196,501,187,506,164,529,158,530,150,523,122,546,120,546,157,555,183,555,223,856,221,820,277];
        foreach ($coords_3 as &$coord) {
          $coord = $coord * $scale; 
        }
        $coords_3_string = implode(",",$coords_3);

        $coords_4 = [445,1,445,122,455,125,460,136,458,160,463,181,475,196,493,191,504,159,527,157,520,130,522,120,546,116,551,124,547,160,557,182,557,111,928,111,999,1];
        foreach ($coords_4 as &$coord) {
          $coord = $coord * $scale; 
        }
        $coords_4_string = implode(",",$coords_4);

        $coords_5 = [3,2,179,275,194,269,201,257,197,240,198,229,203,221,215,218,227,224,232,237,237,260,245,264,258,269,266,274,278,273,273,257,282,244,302,234,312,239,313,254,317,268,330,273,344,283,359,272,374,267,378,259,368,253,360,242,367,230,383,229,401,231,413,241,420,240,439,240,432,220,277,225,135,0];
        foreach ($coords_5 as &$coord) {
          $coord = $coord * $scale; 
        }
        $coords_5_string = implode(",",$coords_5); 
      ?>  
      <map name="puzzle-map" id="puzzle-map">
        <area shape="poly" href="#" coords="<? echo $coords_1_string; ?>" id="area-1">
        <area shape="poly" href="#" coords="<? echo $coords_2_string; ?>" id="area-2">
        <area shape="poly" href="#" coords="<? echo $coords_3_string; ?>" id="area-3">
        <area shape="poly" href="#" coords="<? echo $coords_4_string; ?>" id="area-4">
        <area shape="poly" href="#" coords="<? echo $coords_5_string; ?>" id="area-5">
      </map>
    </div>

    <img class="conceal" src="<?php echo get_template_directory_uri(); ?>/img/mobile_puzzle.png" id="mobile-puzzle">


    <img class="mobile-piece conceal" src="<?php echo get_template_directory_uri(); ?>/img/mobile_piece_1.png" id="mobile-1">
    <div class="piece-content" id="content-1" style="display:none;">
        <div class="quote">
          <p class="content">"Those who want to become great leaders must be willing to become servants."</p>
          <p class="ref"></p>
        </div>
        <p>&nbsp;&nbsp;&nbsp;At Knight Eady, we strive to serve each other, our clients, our communities and our families by going above and beyond our daily responsibilities. We demonstrate proactive customer service so that we can plan to meet others needs before they are discovered. We feel extremely blessed with the talents and resources that we have been given, so we choose to give back in as many ways as possible.</p>
    </div>

    <img class="mobile-piece conceal" src="<?php echo get_template_directory_uri(); ?>/img/mobile_piece_2.png" id="mobile-2">
    <div class="piece-content" id="content-2" style="display:none;">
      <div class="quote">
        <p class="content">"Love what you do and you'll never work another day in your life."</p>
        <p class="ref">- Marc Anthony</p>
      </div>
      <div class="quote">
        <p class="content">"Happy People are Productive People"</p>
        <p class="ref">– Southwest</p>
      </div>
      <p>&nbsp;&nbsp;&nbsp;One of the things that set Knight Eady apart from other companies is that we place great value on family and life outside of work. While we are also very dedicated to our clients and our work, we commit to not take ourselves too seriously! We look for both fun and humor in our daily lives in order to keep each other engaged, joyful, interested, and passionate about our work. Our company culture is what makes us successful and unique. We believe that happy employees lead to happy customers, which in turn lead to a profitable business. We consider ourselves a family and enjoy living life together.</p>
    </div>

    <img class="mobile-piece conceal" src="<?php echo get_template_directory_uri(); ?>/img/mobile_piece_3.png" id="mobile-3">
    <div class="piece-content" id="content-3" style="display:none;">
        <div class="quote">
          <p class="content">"If we can take care of our customers and create a motivating work environment for our people, profits and financial strength are applause we get for a job well done. Success is both results and relationships."</p>
          <p class="ref">- The Secret by Mark Miller</p>
        </div>
        <p>&nbsp;&nbsp;&nbsp;Although it is difficult to value both results and relationships because we are all wired to have a bias one way or the other, Knight Eady feels that the best leaders and companies are those that place equal significance on both. We set high expectations and clear goals for ourselves while holding each other accountable and giving our personal best every day in order to achieve excellence. Equally as important are the ways in which we build and maintain relationships with each other and our clients. We measure the success of our company through the success of our clients, fans, customers, and the people that we serve. Our biggest priority is to execute an event or deliver a service that exceeds the expectations of our partners and will provide them more followers, brand equity, and profits.</p> 
        <p>&nbsp;&nbsp;&nbsp;In addition, we make time for one another and have a genuine interest in the success of each individual both personally and professionally.</p>
    </div>

    <img class="mobile-piece conceal" src="<?php echo get_template_directory_uri(); ?>/img/mobile_piece_4.png" id="mobile-4">
    <div class="piece-content" id="content-4">
      <div class="quote">
        <p class="content">"The key to any brand staying relevant is to constantly innovate and evolve by being nimble and progressive, and to share the same values that Millennials respect."</p>
        <p class="ref">- Forbes article on Coca-Cola</p>
      </div>
      <p>&nbsp;&nbsp;&nbsp;Crucial to the long-term success of a company is to make innovation happen continuously. Many businesses come up with one big idea- but that's not enough. Creativity, courage, risk taking and reinvention are essential to drive effective innovation. It is also imperative that everyone in the company is on board with the same mentality. At Knight Eady we can guarantee to always set goals that cater to future growth for our company and our partners.</p>
    </div>

    <img class="mobile-piece conceal" src="<?php echo get_template_directory_uri(); ?>/img/mobile_piece_5.png" id="mobile-5">
    <div class="piece-content" id="content-5" style="display:none;">
      <div class="quote">
        <p class="content">"It's hard... but if we weren't doing something hard, then we'd have no business. The only reason we aren't swamped by our competition is because what we do is hard, and we do it better than anyone else. If it ever gets too easy, start looking for a tidal wave of competition to wash us away."</p>
        <p class="ref">– Zappos</p>
      </div>
      <p>&nbsp;&nbsp;&nbsp;We strongly believe that it is important to constantly challenge and stretch ourselves so that we always feel like we are learning and growing. By learning from other successful companies and keeping a pulse on the market place, we are continually pushing ourselves to keep up and even surpass the demands of fans and audiences. Whether reading a book, attending a seminar, or signing up for a marathon, we believe that all growth opportunities result in the development of character, leadership, and dedication.</p>
    </div>


  </div>


  <img src="<?php echo get_template_directory_uri(); ?>/img/door.jpg" alt="Knight Eady Office" id="door" /> 

<?php the_content(); ?>

</div>

<?php get_sidebar(); ?>

</div>



<?php get_footer(); ?>




