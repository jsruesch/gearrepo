<?php
/*
 Template Name: Home V2
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Banner
-->
<div class="hp-banner-container">
  <div class="container-fluid">
    <video data-src-high="<?php echo get_template_directory_uri(); ?>/vid/test-render-04.mp4" type"video/mp4" autoplay muted loop data-js-init="video" src="<?php echo get_template_directory_uri(); ?>/vid/test-render-04.mp4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/banner-space-with-ship.png">
        Your browser does not support the video tag.
    </video>
    <div class="container">
      <div class="row pad15-left pad15-right">
        <!-- Type JS -->
        <div class="col-sm-8">
          <h1 class="text-shadow">
            <span class="text-white">WE CREATE GAMES<br /> THAT</span>
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
  <div class="container-fluid mission-container wow fadeIn">
      <div class="container pad30-left pad30-right">
        <div class="col-sm-12">
            <h2 class="text-center text-white mission-text wow fadeInUp" data-wow-delay=".45s">We design and develop games to help make complex content accessible and fun.</h2>
        </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="container pad30-left pad30-right">

      <div class="row">

        <div class="col-sm-8 pad20-top pad15-left pad15-right wow fadeInUp" data-wow-delay=".55s">
          <div class="row">
            <?php query_posts('category_name=featured&posts_per_page=1');?>
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


        <!--
          BEGIN: News & Twitter
        -->
          <div class="col-sm-4 pad30-top pad15-left pad15-right wow fadeInUp" data-wow-delay=".75s">

            <!-- News -->
            <div clsas="row">
              <h3 class="text-green mar10-bot"><span class="text-white">News &</span> Updates</h3>
              <div class="row">
                <?php query_posts('category_name=news-and-updates&posts_per_page=5');?>
                <?php if (have_posts()) : ?>
                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                    <?php /* If this is a category archive */ if (is_category()) { ?>
                    <?php } ?>
                    <?php while (have_posts()) : the_post(); ?>
                      <!-- The Content -->
                      <div <?php post_class() ?>>
                        <div class="row mar1-top bg-ddblue news-list-item">
                          <p><?php the_content(); ?></p>
                        </div>
                      </div><!-- /The Content -->
                    <?php endwhile; ?>
                    <?php else : ?>
                      <p class="text-lblue">There are currently no items to display</p>
                <?php endif; ?>
              </div>
            </div><!-- END: News -->

            <!-- Twitter -->
            <div class="row mar30-top">
              <h3 class="text-green mar10-bot"><span class="text-white">News &</span> Updates</h3>
              <div class="row">
                <?php query_posts('category_name=news-and-updates&posts_per_page=5');?>
                <?php if (have_posts()) : ?>
                    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                    <?php /* If this is a category archive */ if (is_category()) { ?>
                    <?php } ?>
                    <?php while (have_posts()) : the_post(); ?>
                      <!-- The Content -->
                      <div <?php post_class() ?>>
                        <div class="row mar1-top bg-ddblue news-list-item">
                          <p><?php the_content(); ?></p>
                        </div>
                      </div><!-- /The Content -->
                    <?php endwhile; ?>
                    <?php else : ?>
                      <p class="text-lblue">There are currently no items to display</p>
                <?php endif; ?>
              </div>
            </div><!-- END: Twitter -->


          </div><!-- /.col-sm-4 -->

      </div><!-- ./row -->

        <!--
          BEGIN: Recent Release
        -->
        <a href="/at-play-in-the-cosmos">
          <div class="row mar30-top mar30-bot pad20-left pad20-right wow fadeInUp" data-wow-delay=".85s">
              <div class="recent-release-img-container">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/featured-image-cosmos-01.png"/>
                  <div class="row pad30 bg-ddblue recent-release-title-container">
                    <h3 class="text-white">Recent Release</h3>
                    <h1 class="text-green">At Play in the Cosmos</h1>
                    <div class="thickdiv mar10-bot mar10-top"></div>
                    <p class="text-lblue">
                      At Play in the Cosmos takes concepts from the textbook and transforms them in to interactive, intuitive tools and interactives that help students experience content in a way never done before.
                    </p>
                  </div>
              </div>
          </div>
        </a>
        <!-- END: Recent Release -->

    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
