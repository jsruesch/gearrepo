<?php
/*
 Template Name: Profile Leo
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar30-top mar20-bot pad30-left pad30-right">
    <div class="container">
    <!--
      BEGIN: UNIFIED VISION
      -->
      <div class="row mar30-bot">
        <div class="col-sm-3 pad10-right pad10-left">
          <!-- Profile Image -->
          <div class="profile-image-container bg-ddblue">
            <div class="leo"></div>
            <div class="corner-tr"></div>
            <div class="corner-bl"></div>
            <div class="profile-name">
              <h3 class="text-green">Leonid<br />Umanskiy</h3>
              <div class="thickdiv mar10-bot mar10-top"></div>
              <h6 class="text-white small bold text-uppercase">Software Engineer</h6>
            </div>
          </div><!-- END: Profile -->
          <div class="row bg-green pad30">
            <h4 class="text-dblue"><i class="fa fa-star text-white" aria-hidden="true"></i> Skills</h4>
            <div class="thickdiv mar10-bot mar10-top"></div>
            <ul class="text-dblue disc">
              <li>C++</li>
              <li>C#</li>
              <li>Python</li>
              <li>Python</li>
              <li>JavaScript</li>
            </ul>
          </div>
          <div class="row bg-ddblue">
            <div class="col-sm-12">
              <div class="profile-link-button">
                <a class="text-center btn-gen" href="mailto:leo@gearlearning.org" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-9 pad10-right pad10-left">
          <div class="row bg-ddblue pad30">
            <div class="row">
              <p class="text-lblue">
                I started my career almost 10 years ago as a freelance web developer. In the meantime, I was teaching myself game development by creating game mods and working with game servers.
                In 2010, I published my first app - a word learning game for iOS that became popular in Russia and hit top-charts of the Russian iOS App store.
                Later, I became a Software Engineer in Moscow Automobile and Road Construction University, where I was working on the web-based examination and remote education systems.
                While working there, I launched a startup that provided game servers for professional and semi-professional players.
                Two and a half years later, I moved to the U.S. and got my B.S. degree in Game Development, and started working with Learning Games Network in 2015.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 bg-green pad30">
              <h4 class="text-dblue"><i class="fa fa-trophy text-white" aria-hidden="true"></i> Projects</h4>
              <div class="thickdiv mar10-bot mar10-top"></div>
              <ul class="text-dblue disc">
                <li>At Play in the Cosmos</li>
                <li>UW Chemical Business Simulator</li>
                <li>Xenos Isle</li>
                <li>Ross Medical and Veterinary Games and Simulations</li>
              </ul>
            </div>
            <div class="col-sm-8 bg-lblue">
              <div class="col-sm-6 pad30">
                <h4 class="text-dblue"><i class="fa fa-gamepad text-white" aria-hidden="true"></i> Playing Now</h4>
                <div class="thickdiv mar10-bot mar10-top"></div>
                <ul class="text-dblue disc">
                  <li>Overwatch</li>
                </ul>
              </div>
              <div class="col-sm-6 pad30">
                <h4 class="text-dblue"><i class="fa fa-heart text-white" aria-hidden="true"></i> Favorites</h4>
                <div class="thickdiv mar10-bot mar10-top"></div>
                <ul class="text-dblue disc">
                  <li>Counter-Strike</li>
                  <li>Dota 2</li>
                  <li>Overwatch</li>
                  <li>Super Meat Boy</li>
                  <li>Half-Life Series</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END: UNIFIED VISION -->

    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
