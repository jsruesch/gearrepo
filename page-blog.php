<?php
/*
 Template Name: Blog Home
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-top mar20-bot">
    <div class="container pad30-left pad30-right">
      <!--
        BEGIN: Featured Post
      -->
        <div class="row mar20-bot">
          <?php query_posts('category_name=featured&posts_per_page=1');?>
          <?php if (have_posts()) : ?>
              <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
              <?php /* If this is a category archive */ if (is_category()) { ?>
              <?php } ?>
              <?php while (have_posts()) : the_post(); ?>
                <!-- The Content -->
                <div <?php post_class() ?>>
                  <div class="row featured-img-container">
                    <a href="<?php the_permalink() ?>">
                        <?php
                          if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                          }?>
                          <div class="row pad30 bg-ddblue featured-title-container">
                            <h3 class="text-white">GEAR Feature:</h3>
                            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                            </span></p>
                          </div>
                    </a>
                  </div>

                </div><!-- /The Content -->
              <?php endwhile; ?>
              <?php else : ?>
                <p class="text-lblue">There are currently no items to display</p>
          <?php endif; ?>
        </div>
      <!-- END: Featured Post -->
      <div class="row">
        <!--
          BEGIN: Gearbox
        -->
          <div class="col-sm-6 pad10-top pad20-bot pad10-left pad10-right">
            <h3 class="text-green"><span class="text-white">GEAR</span>box</h3>
            <div class="row">
              <?php query_posts('category_name=gearbox&posts_per_page=1');?>
          		<?php if (have_posts()) : ?>
          				<?php $post = $posts[0]; ?>
          				<?php  if (is_category()) { ?>
          				<?php } ?>
          				<?php while (have_posts()) : the_post(); ?>

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
                        <p><span  class="text-lblue"><?php the_excerpt( $more_link_text , $strip_teaser ); ?>
                        </span></p>
                      </div>
                    </div>
                  <?php endwhile; ?>
                  <?php else : ?>
                    <p class="text-lblue">There are currently no items to display</p>
              <?php endif; ?>
            </div>
          </div>
        <!-- END: Gearbox -->
        <!--
          BEGIN: Inside Gear
        -->
          <div class="col-sm-6 pad10-top pad20-bot pad10-left pad10-right">
            <h3 class="text-green"><span class="text-white">Inside </span>GEAR</h3>
            <div class="row">
              <?php query_posts('category_name=inside-gear&posts_per_page=1');?>
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
        <!-- END: Inside Gear -->
        <!--
          BEGIN: News & Updates
        -->
          <div class="col-sm-12 pad10-top pad20-bot pad10-left pad10-right">
            <h3 class="text-green mar10-bot"><span class="text-white">News &</span> Updates</h3>
            <div class="row">
              <?php query_posts('category_name=news-and-updates&posts_per_page=10');?>
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
          </div>
        <!-- END: News & Updates -->
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
