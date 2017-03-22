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
  <div class="container-fluid mar20-top mar20-bot">
    <div class="container pad30-left pad30-right">

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
