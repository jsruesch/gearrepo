<?php
/*
 Template Name: Home
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Banner
-->
<div class="hp-banner-container">
  <div class="container-fluid">
    <video data-src-high="<?php echo get_template_directory_uri(); ?>/vid/test-render-02.mp4" type"video/mp4" autoplay muted loop data-js-init="video" src="<?php echo get_template_directory_uri(); ?>/vid/test-render-02.mp4"></video>
    <div class="container">
      <div class="row pad30-left pad30-right">
        <!-- Type JS -->
        <div class="col-sm-6">
          <h1>
            <span class="text-white">WE CREATE GAMES <br /> THAT</span>
            <div id="typed-strings">
                <p>INSPIRE</p>
                <p>TEACH</p>
                <p>INNOVATE</p>
            </div>
          <span id="typed" class="text-green"></span>
          </h1>
        </div><!-- END: Type JS -->
        <!-- <div class="col-sm-6">
          <div class="banner-ship wow fadeInDown" data-wow-duration=".75s">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner-ship.png"/>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>

<!-- END: Banner -->

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-top mar20-bot pad30-left pad30-right">
    <div class="container">
      <div class="col-sm-8">
        <div class="row bg-green pad20">
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
        </div>
      </div>
      <div class="col-sm-4">
        <div class="row bg-lblue pad20">
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
