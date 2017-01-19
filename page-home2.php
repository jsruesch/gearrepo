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
    <div class="container">
      <div class="row pad60-left pad60-right">
          <h2 class="text-center text-white mission-text wow fadeInUp" data-wow-delay=".45s">We design and develop games to help make complex content <span class="text-green">accessible</span> and <span class="text-green">fun</span>.</h2>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container bg-green">
      <div class="col-sm-8">
        <div class="row bg-ddblue">
          <div class="row wow fadeInUp" data-wow-delay=".45s">
            <?php query_posts('category_name=featured&posts_per_page=1');?>
            <?php if (have_posts()) : ?>
                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                <?php /* If this is a category archive */ if (is_category()) { ?>
                <?php } ?>
                <?php while (have_posts()) : the_post(); ?>
                  <!-- The Content -->
                  <div <?php post_class() ?>>
                    <div class="row post-img-container">
                      <a href="<?php the_permalink() ?>">
                      <?php
                        if ( has_post_thumbnail() ) {
                          the_post_thumbnail();
                        }?>
                      </a>
                    </div>
                    <div class="row pad60">
                      <h3><a href="<?php the_permalink() ?>"  class="text-green"><?php the_title(); ?></a></h3>
                      <div class="thickdiv mar10-bot mar10-top"></div>
                      <p><span  class="text-lblue"><?php the_content( $more_link_text , $strip_teaser ); ?>
                      </span></p>
                    </div>
                  </div><!-- /The Content -->
                <?php endwhile; ?>
                <?php else : ?>
                  <p class="text-lblue">There are currently no items to display</p>
            <?php endif; ?>
          </div><!-- ./row -->
        </div>
      </div>

      <div class="col-sm-4">
        <div class="row wow fadeInUp pad60" data-wow-delay=".75s">
          <h3 class="text-ddblue"><span class="text-white">Stay</span> Connected</h3>
          <div class="thickdiv mar15-bot mar10-top"></div>
          <div class="row rel">
            <a class="twitter-timeline" data-height="250" href="https://twitter.com/HigherEdGames">Tweets by HigherEdGames</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
    </div>


  <div class="container-fluid">
    <div class="container">
    <div class="col-sm-8">
      <!--
        BEGIN: Recent Release
      -->
      <a href="/at-play-in-the-cosmos">
        <div class="row wow fadeInUp" data-wow-delay=".25s">
            <div class="recent-release-img-container">
                <img src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/featured-image-cosmos-01.png"/>
                <div class="row pad30 bg-ddblue recent-release-title-container">
                  <h3 class="text-white">Recent Release</h3>
                  <h1 class="text-green">At Play in the Cosmos</h1>
                  <div class="thickdiv mar10-bot mar10-top"></div>
                  <p class="text-lblue">
                    At Play in the Cosmos takes concepts from the textbook and transforms them in to interactive, intuitive tools that help students experience content in a way like never before.
                  </p>
                </div>
            </div>
        </div>
      </a>
      <!-- END: Recent Release -->
    </div>
    <div class="col-sm-4 pad60 bg-ddblue">
      <h3 class="text-green"><span class="text-white">Featured</span> Projects</h3>
      <div class="thickdiv mar10-bot mar10-top"></div>
      <div class="col-xs-12 col-sm-4 col-md-12">
        <div class="row">
            <a href="http://www.gearlearning.org/microsites/econauts/" target="_blank">
              <div class="row selproj-btn">
                <div class="row project-page-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/econauts/project-page-image-econauts-01.png"/>
                </div>
                <div class="row bg-ddblue pad20-top pad15-left pad15-right pad15-bot">
                  <h4 class="text-green">Econauts</h4>
                  <p class="text-lblue">
                      Environmental Science
                  </p>
                </div>
              </a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-12">
        <div class="row">
          <a href="">
            <div class="row selproj-btn">
                <div class="row project-page-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/pawpad/project-page-image-pawpad-01.png"/>
                </div>
              <div class="row bg-ddblue pad20-top pad15-left pad15-right pad15-bot">
                <h4 class="text-green">Pawpad</h4>
                <p class="text-lblue">
                    Veterinary Anatomy
                </p>
              </div>
            </div>
            </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-12">
        <div class="row">
          <a href="">
            <div class="row selproj-btn">
                <div class="row project-page-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/apex/project-page-image-apex-01.png"/>
                </div>
              <div class="row bg-ddblue pad20-top pad15-left pad15-right pad15-bot">
                <h4 class="text-green">Apex Anatomy Table</h4>
                <p class="text-lblue">
                    Interactable Anatomy Table
                </p>
              </div>
            </div>
            </a>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-12">
        <div class="row">
          <a href="">
            <div class="row selproj-btn">
                <div class="row project-page-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/apex/project-page-image-apex-01.png"/>
                </div>
              <div class="row bg-ddblue pad20-top pad15-left pad15-right pad15-bot">
                <h4 class="text-green">Apex Anatomy Table</h4>
                <p class="text-lblue">
                    Interactable Anatomy Table
                </p>
              </div>
            </div>
            </a>
        </div>
      </div>




    </div>
  </div>
</div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
