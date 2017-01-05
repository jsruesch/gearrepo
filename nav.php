<!--
  BEGIN: Full Screen Navigation
-->
  <div class="container-fluid nav-full-container">
    <div class="container">
      <div class="row">
        <div class="nav-logo">
          <a href="<?php echo get_template_directory_uri(); ?>/home"><img src="<?php echo get_template_directory_uri(); ?>/img/gear-logo.svg" class="wow rotateIn"/></a>
        </div>

        <div class="nav-menu">
          <nav>
            <ul>
              <?php include ('nav-links.php'); ?>
            </ul>
          </nav>
        </div>

        <div class="mobile-dropdown">
          <div class="cstbtn navbtn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <span><i class="fa fa-bars" aria-hidden="true"></i></span>
          </div>
          <div class="collapse" id="collapseExample">
            <div class="well">
              <nav>
                <ul>
                  <?php include ('nav-links.php'); ?>
                </ul>
              </nav>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div><!-- END: Full Screen Navigation -->
  <!--
    BEGIN: Mobile Navigation
  -->
