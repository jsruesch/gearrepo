<?php
/*
 Template Name: Profile John
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
            <div class="john"></div>
            <div class="corner-tr"></div>
            <div class="corner-bl"></div>
            <div class="profile-name">
              <h3 class="text-green">John<br />Karczewski</h3>
              <div class="thickdiv mar10-bot mar10-top"></div>
              <h6 class="text-white small bold text-uppercase">Software Engineer</h6>
            </div>
          </div><!-- END: Profile -->
          <div class="row bg-green pad30">
            <h4 class="text-dblue"><i class="fa fa-star text-white" aria-hidden="true"></i> Skills</h4>
            <div class="thickdiv mar10-bot mar10-top"></div>
            <ul class="text-dblue disc">
              <li>C#</li>
              <li>Unity3D</li>
              <li>LUA</li>
              <li>C / C++</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-9 pad10-right pad10-left">
          <div class="row bg-ddblue pad30">
            <div class="row">
              <p class="text-lblue">
                My name is John Karczewski and I am a Software Engineer and life-long gamer with over 7 years of professional game development experience.  Before getting into game development, I attended the University of Illinois at Urbana-Champaign where I earned a Bachelor’s of Science in Computer Science.  After graduating, I joined Volition, Inc. where I worked on Red Faction: Armageddon and Saint’s Row: The Third.  Fresh off of shipping those titles, I moved to Madison, Wisconsin and joined LGN. Over the course of 5 years with LGN I helped develop 7 games, including – Fair Play, EcoNauts, Zoombinis, and At Play in the Cosmos. When I’m not playing or making games, I enjoy cooking, binge watching TV shows, and spending time with our two cats – Gizmo and Gomez.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 bg-green pad30">
              <h4 class="text-dblue"><i class="fa fa-trophy text-white" aria-hidden="true"></i> Projects</h4>
              <div class="thickdiv mar10-bot mar10-top"></div>
              <ul class="text-dblue disc">
                <li>At Play in the Cosmos</li>
                <li>Zoombinis</li>
                <li>Econuats</li>
                <li>Fair Play</li>
                <li>Saint's Row: The Third</li>
                <li>Red Faction: Armageddon</li>
              </ul>
            </div>
            <div class="col-sm-8 bg-lblue">
              <div class="col-sm-6 pad30">
                <h4 class="text-dblue"><i class="fa fa-gamepad text-white" aria-hidden="true"></i> Playing Now</h4>
                <div class="thickdiv mar10-bot mar10-top"></div>
                <ul class="text-dblue disc">
                  <li>Final Fantasy XV</li>
                  <li>World of Warcraft</li>
                  <li>The Legend of Zelda: Twilight Princes</li>
                </ul>
              </div>
              <div class="col-sm-6 pad30">
                <h4 class="text-dblue"><i class="fa fa-heart text-white" aria-hidden="true"></i> Favorites</h4>
                <div class="thickdiv mar10-bot mar10-top"></div>
                <ul class="text-dblue disc">
                  <li>Gunstar Heroes</li>
                  <li>Megaman X</li>
                  <li>The Binding of Isaac</li>
                  <li>World of Warcraft</li>
                  <li>Final Fantasy VI</li>
                  <li>Kingdom Hearts</li>
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
