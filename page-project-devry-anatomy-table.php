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
  <div class="container-fluid mar20-bot pad30-left pad30-right">
    <div class="container">
      <div class="row mar20-bot">
        <div class="row iframe-embed-container">
          <iframe src="https://player.vimeo.com/video/179368796?byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
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
      <div class="row mar20-bot">
        <div class="row">
          <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/apex/apex-in-the-classroom.png" />
        </div>
        <div class="row pad60 bg-ddblue">
          <h3 class="text-green">Use in Classrooms</h3>
          <p class="text-lblue">
            The apex software is currently being used in classrooms internationally to teach anatomy to hundreds of anatomy students.  APEX Software can be directly incorporated into classroom activities through its innovative data sharing solutions!
          </p>
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
