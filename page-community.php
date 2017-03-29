<?php
/*
 Template Name: Community
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
<div class="container-fluid">
  <div class="container">

  <!-- Community Intro -->
    <div class="row pad60">
      <div class="row pad15-left pad15-right mar15-bot">
        <h2 class="text-white">Community <span class="text-green">Outreach</span></h2>
        <div class="thickdiv mar10-bot mar10-top"></div>
        <p class="text-lblue">
          Gear Learning is highly dedicated to building long-term relationships with local and statewide communities. For us, our goal is not simply to develop educational games for impact. Rather, to provide rich learning environments that encourage peer mentoring opportunities, critical thinking skills, and interest-driven experiences. Our team is ready to develop programming opportunities that fit your needs, learning objectives, and goals.
        </p>
      </div>
      <div class="col-sm-4 pad15">
        <div class="row bg-green pad30">
          <div class="row mar20-bot">
            <img class="center-block com-svg" src="<?php echo get_template_directory_uri(); ?>/img/misc/icon-partners.svg" />
          </div>
          <div class="row">
            <h4 class="text-white text-center">Community<br /> Partners</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4 pad15">
        <div class="row bg-green pad30">
          <div class="row mar20-bot">
            <img class="center-block com-svg" src="<?php echo get_template_directory_uri(); ?>/img/misc/icon-calendar.svg" />
          </div>
          <div class="row">
            <h4 class="text-white text-center">Event<br /> Calendar</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-4 pad15">
        <div class="row bg-green pad30">
          <div class="row mar20-bot">
            <img class="center-block com-svg" src="<?php echo get_template_directory_uri(); ?>/img/misc/icon-experts-wanted.svg" />
          </div>
          <div class="row">
            <h4 class="text-white text-center">Experts<br /> Wanted</h4>
          </div>
        </div>
      </div>
    </div><!-- END: Community Intro -->
  <!-- Outreach -->
  <div class="row pad60 bg-ddblue">
    <h2 class="text-white pad10-left">Outreach <span class="text-green">Activities</span></h2>
    <div class="thickdiv mar10-bot mar10-top mar10-left"></div>
    <div class="row">
      <div class="col-sm-6 pad15">
        <div class="row bg-comyellow-trans com-section">
          <div class="row pad30 com-bg-container">
            <div class="bg-game-jams com-section-bg"></div>
            <img class="center-block com-svg" src="<?php echo get_template_directory_uri(); ?>/img/misc/icon-game-jam.svg" />
          </div>
          <div class="row pad20 bg-comyellow">
            <h4 class="text-white text-center">Game Jams</h4>
          </div>
          <div class="row pad20 bg-comyellow-trans">
            <p class="text-white mar20-bot">
              In Gear Learning's Game Jams participants will
            </p>
            <ol class="disc text-white">
              <li>Be introduced to game mechanics and narrative</li>
              <li>Think critically about the communication of ideas and design</li>
              <li>Collaborate with others within an interdisciplinary community </li>
              <li>Learn about the process of designing a game from the ground up</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="col-sm-6 pad15">
        <div class="row bg-comblue-trans com-section">
          <div class="row pad30 com-bg-container">
            <div class="bg-artist-spotlight com-section-bg"></div>
            <img class="center-block com-svg" src="<?php echo get_template_directory_uri(); ?>/img/misc/icon-artist-spotlight.svg" />
          </div>
          <div class="row pad20 bg-comblue">
            <h4 class="text-white text-center">Artist Spotlight</h4>
          </div>
          <div class="row pad20 bg-comblue-trans">
            <p class="text-white mar20-bot">
              In Gear Learning's Artist Spotlights participants will
            </p>
            <ol class="disc text-white">
              <li>Hear about an artist’s journey into the game design world</li>
              <li>Learn about the challenges and rewards of the job</li>
              <li>Be introduced to a new artistic skill, software, or activity *</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 pad15">
        <div class="row bg-compink-trans com-section">
          <div class="row pad30 com-bg-container">
            <div class="bg-game-night com-section-bg"></div>
            <img class="center-block com-svg" src="<?php echo get_template_directory_uri(); ?>/img/misc/icon-game-night.svg" />
          </div>
          <div class="row pad20 bg-compink">
            <h4 class="text-white text-center">Game Night</h4>
          </div>
          <div class="row pad20 bg-compink-trans">
            <p class="text-white mar20-bot">
              In Gear Learning's Game Nights participants will
            </p>
            <ol class="disc text-white">
              <li>Engage in gameplay while learning critical scientific concepts</li>
              <li>Explore, create, build, and master new conceptual frameworks</li>
              <li>Explore problem solving techniques alongside classmates and friends</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="col-sm-6 pad15">
        <div class="row bg-comred-trans com-section">
          <div class="row pad30 com-bg-container">
            <div class="bg-programming-spotlight com-section-bg"></div>
            <img class="center-block com-svg" src="<?php echo get_template_directory_uri(); ?>/img/misc/icon-programmer-spotlight.svg" />
          </div>
          <div class="row pad20 bg-comred com-section-title">
            <h4 class="text-white text-center">Programming Spotlight</h4>
          </div>
          <div class="row pad20 bg-comred-trans">
            <p class="text-white mar20-bot">
              In Gear Learning's Programming Spotlights participants will
            </p>
            <ol class="disc text-white">
              <li>Hear about a programmer’s responsibilities in game design</li>
              <li>Learn about the challenges and rewards of the job</li>
              <li>Be introduced to a new programming skill or concept *</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="row pad15">
      <div class="row">
        <div class="row pad20 bg-green">
          <h4 class="text-white text-center">Q&A with Professionals</h4>
        </div>
        <div class="row pad20 bg-ogreen">
          <p class="text-white">
            Other activities include game events with Q&A from professionals in the field (e.g. playing a game about biology and speaking with a biologist).
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <p class="text-mblue text-center">
        <strong><span class="text-lblue">*</span></strong> organizations may request specific activities or topics
      </p>
    </div>
  </div><!-- END:  -->





      <!-- BEGIN: Event Calendar -->
      <div class="row pad60-top">
        <h3 class="text-green mar10-bot"><span class="text-white">Event</span> Calendar</h3>
        <div class="row pad10-top">
          <?php echo do_shortcode("[ecwd id='161']"); ?>
        </div>
      </div><!-- END: Event Calendar -->

      <div class="row pad60 bg-ddblue">
        <h2 class="text-white">Community <span class="text-green">Partners</span></h2>
        <div class="row mar20-top">
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-norton.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-lead.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-devry.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-nysci.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-wid.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-hevga.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-gates.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-cihm.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-uw-med.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-uw-engineering.png" />
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 col-lg-2 pad20">
            <img class="center-block partner-logo" src="<?php echo get_template_directory_uri(); ?>/img/partner-logos/partner-logo-nsf.png" />
          </div>
        </div>
      </div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
