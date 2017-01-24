<?php
/*
 Template Name: Project - Cosmos
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Banner
-->
<div class="project-banner-cosmos">
  <div class="container-fluid">
    <div class="container">
      <div class="row pad30-left pad30-right">

        <div class="col-sm-6">
          <div class="game-logo-container pad20-left pad20-right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/game-logos/cosmos.svg" />
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- END: Banner -->

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-bot">
    <div class="container pad30-left pad30-right">
      <div class="row mar20-bot">
        <div class="row iframe-embed-container">
          <iframe src="https://player.vimeo.com/video/179368796?byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>

    <!--
      BEGIN: CORI
    -->
      <div class="row">
        <div class="row pad60 bg-c-teal">
          <div class="col-sm-2 pad20 bg-ddblue">
            <img class="center-block" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/icon-cori.svg" />
          </div>
          <div class="col-sm-10 pad20">
            <h2 class="text-ddblue">Introducing CORI</h2>
            <div class="thickdiv mar10-bot mar10-top"></div>
            <p class=" text-ddblue">
              CORI, the <strong><span class="text-white"><u>C</u>osmic <u>O</u>perations <u>R</u>esearch <u>I</u>nterface</strong>, is your students' control center within the game. At any time, students can tap this button to access:
            </p>
          </div>
        </div>
        <div class="row pad60 bg-ddblue">
          <div class="row">
            <!-- Star Chart -->
            <div class="col-sm-6 pad10">
              <div class="row">
                <div class="col-sm-4 pad20">
                  <img class="center-block cosmos-svg" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/icon-starchart.svg" />
                </div>
                <div class="col-sm-8">
                  <h3 class="text-c-teal">Star Chart</h3>
                  <p class="text-lblue">
                    The Interactive Star Chart, for travel throughout the universe and access to onboard scientific analysis tools, such as the Spectrum Analyzer and Small Angle Tool.
                  </p>
                </div>
              </div>
            </div><!-- END: Star Chart -->
            <!-- Missions -->
            <div class="col-sm-6 pad10">
              <div class="row">
                <div class="col-sm-4 pad20">
                  <img class="center-block cosmos-svg" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/icon-missions.svg" />
                </div>
                <div class="col-sm-8">
                  <h3 class="text-c-green">Missions</h3>
                  <p class="text-lblue">
                    The Missions Button, for acces to the missions list, or to switch to Sandbox Mode
                  </p>
                </div>
              </div>
            </div><!-- END: Missions -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-6 pad10">
              <div class="row">
                <div class="col-sm-4 pad20">
                  <img class="center-block cosmos-svg" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/icon-data.svg" />
                </div>
                <div class="col-sm-8">
                  <h3 class="text-c-pink">Data</h3>
                  <p class="text-lblue">
                    The Data Almanac, for access to the Interactive Simulations and Glassary. Students can also track their Achievements here.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 pad10">
              <div class="row">
                <div class="col-sm-4 pad20">
                  <img class="center-block cosmos-svg" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/icon-engineering.svg" />
                </div>
                <div class="col-sm-8">
                  <h3 class="text-c-yellow">Engineering</h3>
                  <p class="text-lblue">
                    The Engineering Button, where students can access the Crafting System used to repair the ship
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END: CORI -->
    
      <!-- Tools -->
      <!-- <div class="row mar20-bot">
        <div class="col-sm-6">
          <div class="row video-embed-container-md">
            <video data-src-high="<?php echo get_template_directory_uri(); ?>/vid/test-render-02.mp4" type"video/mp4" autoplay muted loop data-js-init="video" src="<?php echo get_template_directory_uri(); ?>/vid/test-render-02.mp4"></video>
          </div>
        </div>
        <div class="col-sm-6 pad30">
          <h2 class="text-green">From the page to your fingertips</h2>
          <div class="thickdiv mar10-bot mar10-top"></div>
          <p class="text-lblue">
            At Play in the Cosmos takes concepts from the textbook and transforms them in to interactive, intuitive tools and interactives that help students experience content in a way never done before.
          </p>
        </div>
      </div><!-- END: Tools -->
      <!-- Narrative -->
      <!-- <div class="row pad60 bg-ddblue">
        <div class="col-sm-6">
          <h2 class="text-green">Play up to 20 narrative-driven missions!</h2>
          <div class="thickdiv mar10-bot mar10-top"></div>
          <p class="text-lblue">
            At Play in the Cosmos offers a complex, story-driven campaign along side a robust sandbox mission mode where players get to roam the universe and research new locations and environments.
          </p>
        </div>
        <div class="col-sm-6">

        </div>
      </div> -->
      <!-- END: Narrative -->
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
