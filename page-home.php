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
          <h1 class="text-shadow">
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
      <div class="col-sm-8 pad10-left pad10-right">
        <div class="row bg-green pad20">

        </div>
      </div>
      <div class="col-sm-4 pad20-top pad20-bot pad10-left pad10-right">
        <h3 class="text-green"><span class="text-white">News &</span> Updates</h3>
        <div class="row">
          <?php query_posts('category_name=gearbox&posts_per_page=1');?>
          <?php if (have_posts()) : ?>
              <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
              <?php /* If this is a category archive */ if (is_category()) { ?>
              <?php } ?>
              <?php while (have_posts()) : the_post(); ?>
                <!-- The Content -->
                <div <?php post_class() ?>>
                  <div class="row post-img-container mar10-top">
                    <a href="<?php the_permalink() ?>">
                    <?php
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      }?>
                    </a>
                  </div>
                  <div class="row pad30 bg-ddblue">
                    <h4><a href="<?php the_permalink() ?>"  class="text-green"><?php the_title(); ?></a></h4>
                    <div class="thickdiv mar10-bot mar10-top"></div>
                    <p><span  class="text-lblue"><?php the_content( $more_link_text , $strip_teaser ); ?>
                    </span></p>
                  </div>
                </div><!-- /The Content -->
              <?php endwhile; ?>
              <?php else : ?>
                <p class="text-lblue">There are currently no items to display</p>
          <?php endif; ?>
        </div>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
