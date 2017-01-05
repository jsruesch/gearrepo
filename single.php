<?php get_header(); ?>
<?php include ('nav.php'); ?>


<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mc">
    <div class="container">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- Featured Image -->
      <div class="row post-img-container mar10-top">
        <a href="<?php the_permalink() ?>">
        <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          }?>
        </a>
      </div><!-- Featured Image -->

			<div class="row" <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <div class="row pad30 bg-ddblue">
          <h2 class="text-green"><?php the_title(); ?></h2>
          <div class="thickdiv mar10-bot mar10-top"></div>
          <div class="text-lblue">By <?php the_author_posts_link(); ?> on <?php the_time('F j, Y') ?></div>

        </div>
        <div class="row pad20 bg-white">
          <p  class="text-lblue bcopy">
            <?php the_content(); ?>
          </p>
        </div>

				<!-- Edit This Entry -->
				<div class="row pad15-top">
					<?php edit_post_link('Edit this entry','','.'); ?>
				</div><!-- Edit This Entry -->
			</div>
		<?php endwhile; endif; ?>

	</div><!-- /.container -->
</div><!-- /.container-fluid -->

<?php get_footer(); ?>
