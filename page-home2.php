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
  <!-- Mission -->
  <div class="container-fluid mission-container wow fadeIn">
    <div class="container">
      <div class="row pad60-left pad60-right">
          <h2 class="text-center text-white mission-text wow fadeInUp" data-wow-delay=".45s">We design and develop games to help make complex content <span class="text-green">accessible</span> and <span class="text-green">fun</span>.</h2>
      </div>
    </div>
  </div><!-- END: Mission -->
<!--
  BEGIN: Featured Post
-->
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
      </div><!-- END: Featured Post -->
    <!--
      BEGIN: Stay Connected
    -->
      <div class="col-sm-4">
        <div class="row wow fadeInUp pad30" data-wow-delay=".75s">
          <h4 class="text-ddblue"><span class="text-white">Stay</span> Connected</h4>
          <div class="thickdiv mar15-bot mar10-top"></div>
          <!-- Twitter -->
          <div class="row">
            <a class="twitter-timeline" data-height="250" href="https://twitter.com/HigherEdGames">Tweets by HigherEdGames</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
          <!-- SM Buttons -->
          <div class="row wow fadeInUp mar20-top" data-wow-delay="1.5s">
            <div class="col-xs-3 bg-lgreen">
              <div class="profile-link-button">
                <a class="btn-gen" href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-xs-3">
              <div class="profile-link-button">
                <a class="btn-gen" href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-xs-3 bg-lgreen">
              <div class="profile-link-button">
                <a class="btn-gen" href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-xs-3">
              <div class="profile-link-button">
                <a class="btn-gen" href="" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
              </div>
            </div>
          </div><!-- END: SM Buttons -->
        </div><!-- /.row -->
      </div><!-- END: Stay Connected -->
    <!--
      BEGIN: Featured Projects
    -->
      <div class="col-sm-12 pad60">
        <div class="row">
          <h3 class="text-ddblue"><span class="text-white">Featured</span> Projects</h3>
          <div class="thickdiv mar15-bot mar10-top"></div>
        </div>
        <!-- Project 1 -->
        <div class="col-sm-4 wow fadeInUp" data-wow-delay=".25s">
          <div class="row bg-ddblue hp-featured-proj">
            <a href="at-play-in-the-cosmos">
                <div class="row project-page-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/cosmos/project-page-image-cosmos-01.png"/>
                </div>
                <div class="row bg-ddblue pad25">
                  <h4 class="text-green">At Play in the Cosmos</h4>
                  <p class="text-lblue">
                      Astronomy
                  </p>
                </div>
              </a>
          </div>
        </div><!-- END: Project 2 -->
        <!-- Project 2 -->
        <div class="col-sm-4 wow fadeInUp" data-wow-delay=".45s">
          <div class="row bg-ddblue hp-featured-proj">
            <a href="http://www.gearlearning.org/microsites/econauts/" target="_blank">
                <div class="row project-page-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/econauts/project-page-image-econauts-01.png"/>
                </div>
                <div class="row bg-ddblue pad25">
                  <h4 class="text-green">Econauts</h4>
                  <p class="text-lblue">
                      Environmental Science
                  </p>
                </div>
              </a>
          </div>
        </div><!-- END: Project 2 -->
        <!-- Project 3 -->
        <div class="col-sm-4 wow fadeInUp" data-wow-delay=".65s">
          <div class="row bg-ddblue hp-featured-proj">
            <a href="http://www.gearlearning.org/microsites/progenitor/" target="_blank">
                <div class="row project-page-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/projects/progenitor/project-page-image-progenitor-01.png"/>
                </div>
                <div class="row bg-ddblue pad25">
                  <h4 class="text-green">Progenitor X</h4>
                  <p class="text-lblue">
                      Stem Cell Science
                  </p>
                </div>
              </a>
          </div>
        </div><!-- END: Project 3 -->
      </div><!-- /.col-sm-12 -->
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!--
  BEGIN: Recent Release
-->
  <div class="container-fluid">
    <div class="container bg-ddblue">
      <div class="col-sm-8">
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
      </div><!-- /.col-sm-8 -->
    </div><!-- /container -->
  </div><!-- /.container-fluid -->
<!-- END: Recent Release -->
<!-- END: Main Content -->

<?php get_footer(); ?>
