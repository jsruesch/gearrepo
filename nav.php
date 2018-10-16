
<div class="container-fluid nav-full-container">
  <div class="container">
    <div class="row">
      <!-- Nav Logo -->
      <div class="nav-logo">
        <a href="http://gearlearning.org"><img src="<?php echo get_template_directory_uri(); ?>/img/gear-wcer-soe-logo-ALT-light.svg" class="wow fadeIn"/></a>
      </div><!-- END: Nav Logo -->
    <!--
      BEGIN: Full Screen Navigation
    -->
      <div class="nav-menu">
        <nav>
          <ul>
            <?php include ('nav-links.php'); ?>
          </ul>
        </nav>
      </div><!-- END: Full Screen Navigation -->
    <!--
      BEGIN: Mobile Navigation
    -->
      <div class="mobile-dropdown">
        <button class="cstbtn navbtn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
          <span><i class="fa fa-bars" aria-hidden="true"></i></span>
        </button>
        <div class="collapse" id="collapseExample">
          <div class="well">
            <nav>
              <ul>
                <?php include ('nav-links.php'); ?>
              </ul>
            </nav>
          </div>
        </div>
      </div><!-- END: Mobile Navigation -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.container-fluid .nav-full-container -->
