<?php
/*
 Template Name: Contact
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-top mar20-bot">
    <div class="container pad30-left pad30-right">
      <div class="row">
        <div class="row pad30-top pad20-bot">
          <h1 class="text-green"><span class="text-white">Contact</span> Us</h1>
        </div>
        <div class="row pad30 bg-ddblue">
          <?php echo do_shortcode("[ninja_form id=1]"); ?>
        </div>
      </div>
      <div class="row pad30">
        <p class="text-lblue text-center">
          Gear Learning is part of the <a href="http://www.wcer.wisc.edu/about/contact" taget="_blank">Wisconsin Center for Education Research</a> in the <a href="http://www.wisc.edu/" target="_blank">University of Wisconsin-Madison's</a> <a href="http://www.education.wisc.edu/" target="_blank">School of Education</a>.
        </p>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
