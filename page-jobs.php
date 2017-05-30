<?php
/*
 Template Name: Jobs
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-top mar20-bot">
    <div class="container pad30-left pad30-right">
      <div class="row pad20-top pad10-bot">
        <h1 class="text-green"><span class="text-white">GEAR</span> Jobs</h1>
      </div>
<!--
      <div class="row pad10-top pad10-bot">
        <h3 class="text-green pad10-bot"><span class="text-white">Game Tester</span> Positions</h3>
        <div class="row bg-ddblue pad30-left pad30-right pad20-top pad20-bot">
          <?php query_posts('category_name=game-tester-position');?>
          <?php if (have_posts()) : ?>
              <?php $post = $posts[0]; ?>
              <?php if (is_category()) { ?>
              <?php } ?>
              <?php while (have_posts()) : the_post(); ?>
                <div <?php post_class() ?>>
                  <div class="row">
                    <a href="<?php the_permalink() ?>">
                    <?php
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      }?>
                    </a>
                  </div>
                  <div class="row pad5-top pad5-bot">
                    <h4 class="text-white"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php else : ?>
                <p class="text-lblue">We curently have no <span class="text-green">Game Tester Positions</span> available. Please check back later!</p>
          <?php endif; ?>
        </div>
      </div>

      <div class="row pad10-top pad10-bot">
        <h3 class="text-green pad10-bot"><span class="text-white">Engineering</span> Positions</h3>
        <div class="row bg-ddblue pad30">
          <?php query_posts('category_name=engineer-position');?>
          <?php if (have_posts()) : ?>
              <?php $post = $posts[0]; ?>
              <?php if (is_category()) { ?>
              <?php } ?>
              <?php while (have_posts()) : the_post(); ?>
                <div <?php post_class() ?>>
                  <div class="row">
                    <a href="<?php the_permalink() ?>">
                    <?php
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      }?>
                    </a>
                  </div>
                  <div class="row pad5-top pad5-bot">
                    <h4 class="text-white"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php else : ?>
                <p class="text-lblue">We curently have no <span class="text-green">Engineering Positions</span> available. Please check back later!</p>
          <?php endif; ?>
        </div>
      </div>

      <div class="row pad10-top pad10-bot">
        <h3 class="text-green pad10-bot"><span class="text-white">Artist </span> Positions</h3>
        <div class="row bg-ddblue pad30">
          <?php query_posts('category_name=artist-position');?>
          <?php if (have_posts()) : ?>
              <?php $post = $posts[0]; ?>
              <?php if (is_category()) { ?>
              <?php } ?>
              <?php while (have_posts()) : the_post(); ?>

                <div <?php post_class() ?>>
                  <div class="row">
                    <a href="<?php the_permalink() ?>">
                    <?php
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      }?>
                    </a>
                  </div>
                  <div class="row pad5-top pad5-bot">
                    <h4 class="text-white"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php else : ?>
                <p class="text-lblue">We curently have no <span class="text-green">Artist Positions</span> available. Please check back later!</p>
          <?php endif; ?>
        </div>
      </div>
    -->
      <!-- Other -->
      <div class="row pad10-top pad10-bot">
        <h3 class="text-green pad10-bot"><span class="text-white">Available </span> Positions</h3>
        <div class="row bg-ddblue pad30">
          <?php query_posts('category_name=additional-position');?>
          <?php if (have_posts()) : ?>
              <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
              <?php /* If this is a category archive */ if (is_category()) { ?>
              <?php } ?>
              <?php while (have_posts()) : the_post(); ?>
                <!-- The Content -->
                <div <?php post_class() ?>>
                  <div class="row">
                    <a href="<?php the_permalink() ?>">
                    <?php
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      }?>
                    </a>
                  </div>
                  <div class="row pad5-top pad5-bot">
                    <h4 class="text-white"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                  </div>
                </div><!-- /The Content -->
              <?php endwhile; ?>
              <?php else : ?>
                <p class="text-lblue">We curently have no <span class="text-green">Additional Positions</span> available. Please check back later!</p>
          <?php endif; ?>
        </div>
      </div><!-- END: Other -->

    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
