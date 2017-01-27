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

      <!-- First of its kind -->
      <div class="row pad60 bg-ddblue mar20-bot">
        <div class="row">
          <h2 class="text-green text-center mar20-bot">A First-of-its-kind resource for the<br /> introductory Astronomy course</h2>
          <!-- <div class="thickdiv mar10-bot mar10-top"></div> -->
          <p class="text-lblue large text-center">
            <span class="text-white"><strong>At Play in the Cosmos</strong></span> is a videogame designed to engage students taking the introductory astronomy course for nonscience majors. In the game, students confront challenges and fly missions that span the entire scope of the course, from basic physics through cosmology.
          </p>
        </div>
      </div><!-- END: First of its kind -->

      <!-- Star Chart -->
      <div class="row bg-green mar20-bot">
        <table class="sc-table">
          <tr>
            <td class="col-sm-6 pad10">
              <video class="wow full" data-src-high="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/starchart.mp4" type"video/mp4" autoplay muted loop data-js-init="video" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/starchart.mp4">
                  <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/comet-starchart.png" />
                  Your browser does not support the video tag.
              </video>

            </td>
            <td class="col-sm-6 pad60 ">
              <h3 class="text-white">The Star Chart helps students understand the scale of the universe</h3>
              <div class="thickdiv mar10-bot mar10-top"></div>
              <p class="text-ddblue">
                The interactive Star Chart allows students to travel between objects in our universe. Populated with well-studied celestial objects, the Star Chart supports instructors' goal of helping students develop an intuitive sense of the scale of the universe.
              </p>
            </td>
          </tr>
        </table>
      </div>
      <!-- END: Star Chart -->

    <!--
      BEGIN: CORI
    -->
      <div class="row mar20-bot">

        <div class="row bg-c-teal ">
          <div class="row pad60 ">
            <table class="sc-table">
              <tr>
                <td class="col-sm-2 pad20 bg-ddblue">
                  <img class="center-block cosmos-svg" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/icon-cori.svg" />
                </td>
                <td class="col-sm-10 pad20">
                  <h2 class="text-ddblue">Introducing CORI</h2>
                  <div class="thickdiv mar10-bot mar10-top"></div>
                  <p class=" text-ddblue">
                    CORI, the <strong><span class="text-white"><u>C</u>osmic <u>O</u>perations <u>R</u>esearch <u>I</u>nterface</strong>, is your students' control center within the game. At any time, students can tap this button to access:
                  </p>
                </td>
              </tr>
            </table>
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
                    The Missions Button, for access to the missions list, or to switch to Sandbox Mode.
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
                    The Data Almanac, for access to the Interactive Simulations and Glossary. Students can also track their Achievements here.
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
                    The Engineering Button, where students can access the Crafting System used to repair the ship.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END: CORI -->

    <div class="row pad60 bg-green mar20-bot">
      <h3 class="text-white">Misson based, narrative driven</h3>
      <div class="thickdiv mar10-bot mar10-top"></div>
      <p class="text-ddblue">
        <strong>The theme of exploration drives student gameplay through a variety of narrative and collection missions.</strong> In the guided, narrative missions, each student assumes the role of a search/survey/rescue contractor and takes on the exciting challenges the job offers.<br /><br />
        <strong>The game's Cosmic Operations Research Interface guides students through achieving goals</strong> like finding a habitable exoplanet or redirecting a rogue comet. Along the way, students also need to use the ship's mining tools to collect needed fuel or ore to craft parts for the ship.<br /><br />
        <strong>In addition, players can freely explore over 50 real objects in the cosmos</strong>. They can use the ship's scientific analysis tools, each based on a central concept in the introductory course, to study real astrophysical objects. This "sandbox" mode introduces the possibility of instructors creating their own missions and scavanger hunts.
      </p>
    </div>

    <div class="row bg-ddblue">
      <table class="sc-table">
        <tr>
          <td class="col-sm-6 pad10">
            <video class="wow full" data-src-high="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/small-angle.mp4" type"video/mp4" autoplay muted loop data-js-init="video" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/small-angle.mp4">
                <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/comet-flight.png" />
                Your browser does not support the video tag.
            </video>
            <!-- <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/comet-flight.png" /> -->
          </td>
          <td class="col-sm-6 pad60 ">
            <h3 class="text-green">Engaging, Interactive, Intuitive</h3>
            <div class="thickdiv mar10-bot mar10-top"></div>
            <p class="text-lblue">
              Student testers report being immediately engaged by the game's visual style and the voice of CORI. Whether gamers or not, students adapt quickly to the interface and focus on the missions rather than the medium. The game interface, ship design, and sound were all created with input from student focus group participants.
            </p>
          </td>
        </tr>
      </table>
    </div>

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
