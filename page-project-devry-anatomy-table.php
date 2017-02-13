<?php
/*
 Template Name: Project - DeVry Anatomy Table
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Banner
-->
<div class="project-banner-apex mar20-bot">
  <div class="container-fluid">
    <div class="container">
      <div class="row pad30-left pad30-right">
        <table class="project-img-table">
          <tr>
            <td>
              <img class="center-block max-full" src="<?php echo get_template_directory_uri(); ?>/img/game-logos/apex-logo.png" />
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- END: Banner -->

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid">
    <div class="container">
      <!-- <div class="row">
        <div class="row iframe-embed-container">
          <iframe src="https://player.vimeo.com/video/179368796?byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div> -->
      <!-- APEX Intro -->
      <div class="row pad60 bg-ddblue mar20-bot">
        <div class="row">
          <h2 class="text-green text-center mar20-bot">APEX Anatomy<br />Software and Hardware</h2>
          <!-- <div class="thickdiv mar10-bot mar10-top"></div> -->
          <p class="text-lblue large text-center">
            <strong><span class="text-white">The Anatomy and Physiology Exploration software</span></strong>, or <strong><span class="text-white">APEX</span></strong> for short, is a platform developed to allow the exploration of anatomy of quite literally any species.  In current development are APEXHuman and APEXCanine, with APEXVolucrine (bird anatomy) and a version of APEXHuman for infant anatomy coming soon!
          </p>
        </div>
      </div><!-- END: APEX Intro -->
      <!-- Unique Tool -->
      <div class="row bg-green mar20-bot">
        <table class="sc-table">
          <tr>
            <td class="col-sm-6 pad10">
              <video class="wow full" data-src-high="<?php echo get_template_directory_uri(); ?>/img/projects/apex/apex-heart-rotate.mp4" type"video/mp4" autoplay muted loop data-js-init="video" src="<?php echo get_template_directory_uri(); ?>/img/projects/apex/apex-heart-rotate.mp4">
                  <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/comet-starchart.png" />
                  Your browser does not support the video tag.
              </video>
            </td>
            <td class="col-sm-6 pad60 ">
              <h3 class="text-white">A unique tool to for medical and veterinary students</h3>
              <div class="thickdiv mar10-bot mar10-top"></div>
              <p class="text-ddblue">
                The APEX suite includes the APEXHuman and APEXCanine and allows anatomy students to view structures and relationships between different structures.  Students and professionals use the APEX software to learn and teach about muscles, bones, and other structures without the need for a cadaver in a full 3D environment!
              </p>
            </td>
          </tr>
        </table>
      </div>
      <!-- END: Unique Tool -->
      <!-- In Classrooms -->
      <div class="row mar20-bot">
        <div class="row">
          <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/apex/apex-in-the-classroom.png" />
        </div>
        <div class="row pad60 bg-ddblue">
          <h3 class="text-green">Use in Classrooms</h3>
          <div class="thickdiv mar10-bot mar10-top"></div>
          <p class="text-lblue">
            The apex software is currently being used in classrooms internationally to teach anatomy to hundreds of anatomy students.  APEX Software can be directly incorporated into classroom activities through its innovative data sharing solutions!
          </p>
        </div>
      </div><!-- END: In Classrooms -->
      <div class="row">
        <div class="row pad60 bg-green">
          <h3 class="text-white">A Collaborative Effort</h3>
          <div class="thickdiv mar10-bot mar10-top"></div>
          <p class="text-ddblue">
            We’ve worked closely with anatomy experts at Ross School for Medicine and Ross School for Veterinary Medicine, as well as anatomists with DeVry Medical International and the University of Wisconsin - Madison to assure complete anatomical accuracy.  Each structure is meticulously studied, rendered in 3D, and textured for a photorealistic dissection experience.
          </p>
        </div>
        <div class="col-sm-6"F>
          <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/apex/apex-img-01.png" />
        </div>
        <div class="col-sm-6"F>
          <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/apex/apex-img-02.png" />
        </div>
      </div>
      <!-- Kiosk -->
      <div class="row bg-ddblue mar20-bot">
        <table class="sc-table">
          <tr>
            <td class="col-sm-6 pad60 ">
              <h3 class="text-green">The Kiosk</h3>
              <div class="thickdiv mar10-bot mar10-top"></div>
              <p class="text-lblue">
                The APEX Table is a standalone computer kiosk designed to be moved from classroom to classroom and work with existing A/V setups commonly found in schools.  Connect the APEX Table to a projector and classroom sound system to share one user’s view with the whole class!  The table is also designed specifically to be ADA compliant, allowing anyone to easily use all of it’s features.
              </p>
            </td>
            <td class="col-sm-6 pad10">
              <video class="wow full" data-src-high="<?php echo get_template_directory_uri(); ?>/img/projects/apex/apex-kiosk.mp4" type"video/mp4" autoplay muted loop data-js-init="video" src="<?php echo get_template_directory_uri(); ?>/img/projects/apex/apex-kiosk.mp4">
                  <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/comet-starchart.png" />
                  Your browser does not support the video tag.
              </video>
            </td>
          </tr>
        </table>
      </div>
      <!-- END: Kiosk -->
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
