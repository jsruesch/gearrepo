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
      <div class="row mar20-bot">
        <div class="row vid-embed-container">
          <iframe src="https://player.vimeo.com/video/179368796?byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="row bg-green pad60">
          <h3 class="text-white"> <br /> unified vision</h3>
          <div class="thickdiv mar10-bot mar10-top"></div>
          <p class="text-lblue">
            Together with WW Norton,
          </p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="row bg-ddblue pad60">
          <h3 class="text-white"> <br /> unified vision</h3>
          <div class="thickdiv mar10-bot mar10-top"></div>
          <p class="text-lblue">
            Together with WW Norton,
          </p>
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
