<?php
/*
 Template Name: Blog Gearbox Archive
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-top mar20-bot">
    <div class="container pad30-left pad30-right">
      <div class="row pad20-top pad20-bot">
        <h1 class="text-green"><span class="text-white">GEAR</span>box</h1>
      </div>
      <div class="row pad20 bg-ddblue">
        <?php query_posts('category_name=gearbox');?>
        <?php if (have_posts()) : ?>
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
            <?php } ?>
            <?php while (have_posts()) : the_post(); ?>
              <!-- The Content -->
              <div <?php post_class() ?>>
                <div class="row featured-image-excerpt">
                  <a href="<?php the_permalink() ?>">
                  <?php
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail();
                    }?>
                  </a>
                </div>
                <div class="row">
                  <h3 class="text-dblue"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                  <p>
                    <?php the_content( $more_link_text , $strip_teaser ); ?>
                  </p>
                </div>
              </div><!-- /The Content -->
            <?php endwhile; ?>
            <?php else : ?>
              <h2>Nothing found</h2>
        <?php endif; ?>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
