<?php
/*
 Template Name: Cosmos
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
      <div class="col-sm-8">
        <div class="row">
          <iframe src="https://player.vimeo.com/video/179368796?byline=0&portrait=0" width="100%" height="440" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="row bg-ddblue pad60">
          <h3 class="text-white">Born of a <br /> unified vision</h3>
          <div class="thickdiv mar10-bot mar10-top"></div>
          <p class="text-lblue">
            Building on the design and development experiences over the last seven years with Games + Learning + Society and Learning Games Network, the development team that brought you Virulent, Crystals of Kaydor, Econauts, and At Play in the Cosmos is starting <b>GEAR</b>, a new game development studio at the Wisconsin Center for Education Research at the University of Wisconsin.
          </p>
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
