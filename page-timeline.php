<?php
/*
 Template Name: Timeline
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-top mar20-bot pad30-left pad30-right">
    <div class="container">

      <div class="row mar30-bot">
        <!-- Intro and Dropdown -->
        <div class="row pad20-top">
          <div class="col-sm-8 pad10">
              <p class="text-lblue">
                It's been a long journey to get where we are, but it has definitely been a fun one. Here you'll find a chronicling of everything that has happened on our road to eventually joining WCER and becoming GEAR. Take a stroll down memory lane with us, will you?
              </p>
          </div>
          <div class="col-sm-4 pad10">
            <div class="timeline-dropdown">
              <button type="button" data-toggle="collapse" data-target="#collapseYears" aria-expanded="false" aria-controls="collapseYears">
                <h5 class="text-white">Choose Year</h5>
                <i class="fa fa-caret-down" aria-hidden="true"></i>
                <i class="fa fa-caret-up" aria-hidden="true"></i>
              </button>
              <div class="collapse" id="collapseYears">
                <div class="well">
                  <nav>
                    <ul>
                      <li><a href="#yr-09">2009</a></li>
                      <li><a href="/gear/read">2010</a></li>
                      <li><a href="/gear/read">2011</a></li>
                      <li><a href="/gear/read">2012</a></li>
                      <li><a href="/gear/read">2013</a></li>
                      <li><a href="/gear/read">2014</a></li>
                      <li><a href="/gear/read">2015</a></li>
                      <li><a href="/gear/read">2016</a></li>
                      <li><a href="/gear/read">2017</a></li>
                    </ul>
                  </nav>
                </div>
              </div><!-- /.collapse -->
            </div><!-- /.timeline-dropdown -->
          </div><!-- /.col-sm-4 -->
        </div><!-- END: Intro and Dropdown -->

        <!-- 2009 -->
        <div id="yr-09" class="row mar20-bot mar20-top pad20">
          <div class="col-sm-2  year-container">
            <div class="year">
              <h4 class="text-center text-white">2009</h4>
              <div class="yr-dot"></div>
            </div>
          </div>
          <div class="col-sm-10 bg-ddblue pad20">
            <div class="row">
              <div class="row mar10-bot">
                <p class="text-lblue">
                  Mike Beall starts working with Kurt Squire and Rich Halverson at (Games+Learning+Society) GLS and the Education Research Challenge Area (ERCA) at the Morgridge Institute for Research
                </p>
              </div>
              <div class="row">
                <div class="col-sm-3 col-xs-6 pad10">
                    <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/portraits/timeline-mike.png"/>
                </div>
                <div class="col-sm-3 col-xs-6 pad10">
                    <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/portraits/timeline-kurt.png"/>
                </div>
                <div class="col-sm-3 col-xs-6 pad10">
                    <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/portraits/timeline-rich.png"/>
                </div>
                <div class="col-sm-3 col-xs-6 pad10">
                    <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/logos/morgridge-logo.png"/>
                </div>
              </div>
            </div>
            <div class="row mar20-top mar10-bot">
              <h5 class="text-white">Game Release:</h5>
            </div>
            <div class="row pad30-top pad30-bot bg-dblue">
              <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/logos/virulent-logo.png"/>
            </div>
          </div>
        </div><!-- END: 2009 -->


        <div class="row">
          <table class="full">
            <tr>
              <td class="col-xs-3 col-sm-2 bg-green pad10 year">
                <h4 class="text-center text-white">2009</h4>
                <div class="yr-dot"></div>
              </td>
              <td class="col-xs-9 col-sm-10 bg-ddblue pad10">

                <div class="row">
                  <table class="full">
                    <tr>
                      <p class="text-lblue">
                        Mike Beall starts working with Kurt Squire and Rich Halverson at (Games+Learning+Society) GLS and the Education Research Challenge Area (ERCA) at the Morgridge Institute for Research
                      </p>
                    </tr>
                    <tr>
                      <td class="col-sm-3 pad10">
                        <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/portraits/timeline-mike.png"/>
                      </td>
                      <td class="col-sm-3 pad10">
                        <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/portraits/timeline-mike.png"/>
                      </td>
                      <td class=" col-sm-3 pad10">
                        <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/portraits/timeline-mike.png"/>
                      </td>
                      <td class="col-sm-3 pad10">
                        <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/portraits/timeline-mike.png"/>
                      </td>
                    </tr>
                    <tr>
                      <h5 class="text-white">Game Release:</h5>
                    </tr>
                    <tr>
                      <img class="center-block timeline-img" src="<?php echo get_template_directory_uri(); ?>/img/timeline/logos/virulent-logo.png"/>
                    </tr>
                  </table>
                </div>

              </td>
            </tr>
          </table>
        </div>


      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
