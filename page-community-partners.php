<?php
/*
 Template Name: Community Partners
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
<div class="container-fluid">
  <div class="container">

    <div class="row bg-ddblue">
      <table class="sc-table">
        <tr>
          <td class="col-sm-6 pad60">
            <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/community/community-partner-logo-uw-space-place.svg" />
          </td>
          <td class="col-sm-6 pad60 ">
            <h3 class="text-green">UW Space Place</h3>
            <div class="thickdiv mar10-bot mar10-top"></div>
            <p class="text-lblue">
              UW Space Place is the outreach and public education center of the UW-Madison Astronomy Department.
            </p>
          </td>
        </tr>
      </table>
    </div>
    <div class="row bg-green">
      <table class="sc-table">
        <tr>
          <td class="col-sm-6 pad60">
            <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/community/community-partner-logo-the-network.svg" />
          </td>
          <td class="col-sm-6 pad60 ">
            <h3 class="text-white">Network Ed</h3>
            <div class="thickdiv mar10-bot mar10-top"></div>
            <p class="text-ddblue">
              Network Ed is a program that connects graduate students with collaborative partners in Wisconsin and beyond.
            </p>
          </td>
        </tr>
      </table>
    </div>

    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
