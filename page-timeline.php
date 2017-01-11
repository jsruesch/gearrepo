<?php
/*
 Template Name: Timeline
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-top mar20-bot pad30-left pad30-right">
    <div class="container">
    <!--
      BEGIN: UNIFIED VISION
      -->
      <div class="row mar30-bot">

        <div class="row mar20-bot">
          <div class="col-sm-8 pad10">
              <p class="text-lblue">
                It's been a long journey to get where we are, but it has definitely been a fun one. Here you'll find a chronicling of everything that has happened on our road to eventually joining WCER and becoming GEAR. Take a stroll down memory lane with us, will you?
              </p>
          </div>
          <div class="col-sm-4">

          </div>
        </div>

      </div>
    <!-- END: UNIFIED VISION -->
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<!-- Adjust Carousel Rotation Time -->
<script>
  $('.carousel').carousel({
    interval: 2750
  })
</script>

<?php get_footer(); ?>
