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
  <div class="container-fluid mar20-top mar20-bot pad30-left pad30-right">
    <div class="container pad10-left pad10-right">
      <div class="row pad20-top pad20-bot">
        <h1 class="text-green"><span class="text-white">Contact</span> Us</h1>
      </div>
      <div class="row pad30 bg-ddblue">
        <?php echo do_shortcode("[ninja_form id=1]"); ?>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
