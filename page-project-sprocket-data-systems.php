<?php
/*
 Template Name: Project - Sprocket
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Banner
-->
<div class="project-banner-sprocket">
  <div class="container-fluid">
    <div class="container">
      <div class="row pad30-left pad30-right">
      </div>
    </div>
  </div>
</div>

<!-- END: Banner -->

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-bot">
    <div class="container pad30-left pad30-right">

      <!-- What Is Sprocket -->
      <div class="row pad60 bg-ddblue mar20-bot">
        <div class="row">
          <h2 class="text-green text-center mar20-bot">What is Sprocket?</h2>
          <!-- <div class="thickdiv mar10-bot mar10-top"></div> -->
          <p class="text-lblue large text-center">
            <span class="text-white"><strong>Sprocket Data Systems</strong></span>, internally codenamed RData, is a set of modularized web apps that provide data back end services for all of our games and apps.  Sprocket is built on Node.js/Express.js and uses industry standard middleware and software solutions to create a secure, highly customizable server to support our projects.
          </p>
        </div>
      </div><!-- END: What is Sprocket -->

      <!-- Data Dashboards -->
      <div class="row bg-green mar20-bot">
        <table class="sc-table">
          <tr>
            <td class="col-sm-6 pad10">
              <img class="full" src="<?php echo get_template_directory_uri(); ?>/img/projects/sprocket/dashboard-mockup-01.png" />
            </td>
            <td class="col-sm-6 pad60 ">
              <h3 class="text-white">Data Dashboards</h3>
              <div class="thickdiv mar10-bot mar10-top"></div>
              <p class="text-ddblue">
                Collecting all of this data is useful in many ways, but is most meaningful when visualized.  A secure dashboard provides live access to your users data, allowing you to see who’s playing when where in the game they are, both in progress and in game world space!
              </p>
            </td>
          </tr>
        </table>
      </div>
      <!-- END: Data Dashboards -->

      <div class="row bg-ddblue ">
        <div class="row pad60">

          <!-- Authentication -->
          <div class="row pad30-bot">
            <table class="sc-table">
              <tr>
                <td class="col-sm-2">
                  <div class="row bg-ddblue">
                    <img class="center-block cosmos-svg mar30" src="<?php echo get_template_directory_uri(); ?>/img/projects/sprocket/icon-authentication-01.svg" />
                  </div>
                </td>
                <td class="col-sm-10">
                  <div class="row mar10">
                    <h2 class="text-green">Authentication</h2>
                    <div class="thickdiv mar10-bot mar10-top"></div>
                    <p class=" text-lblue">
                      Sprocket’s authentication module allows for custom user management and authentication, or connection to external authentication providers such as OAuth or LDAP systems.  This core piece of technology allows our games to authenticate against existing user databases, handling all necessary information about a user that may be necessary for properly storing and querying game play information.  Related, but separate, is a User Management module that allows special attributes to be given to a user that exist only in our system, and not written back to an external authentication system.
                    </p>
                  </div>
                </td>
              </tr>
            </table>
          </div><!-- END: Authentication -->

          <!-- Data Collection -->
          <div class="row pad30-bot">
            <table class="sc-table">
              <tr>
                <td class="col-sm-2">
                  <div class="row bg-ddblue">
                    <img class="center-block cosmos-svg mar30" src="<?php echo get_template_directory_uri(); ?>/img/projects/sprocket/icon-data-collection-01.svg" />
                  </div>
                </td>
                <td class="col-sm-10">
                  <div class="row mar10">
                    <h2 class="text-green">Data Collection</h2>
                    <div class="thickdiv mar10-bot mar10-top"></div>
                    <p class=" text-lblue">
                      The core purpose of Sprocket is to provide data collection services to games created by Gear Learning.  Through a unique method of hierarchical data tagging, we’re able to gather highly specific information about a player’s actions.  Doing so allows us to gain insight into why a player clicking “Button A” in “Mission 1” and clicking the same button in “Mission 2” might be done for completely different reasons.
                    </p>
                  </div>
                </td>
              </tr>
            </table>
          </div><!-- END: Data Collection -->

          <!-- Data Querying -->
          <div class="row pad30-bot">
            <table class="sc-table">
              <tr>
                <td class="col-sm-2">
                  <div class="row bg-ddblue">
                    <img class="center-block cosmos-svg mar30" src="<?php echo get_template_directory_uri(); ?>/img/projects/sprocket/icon-data-querying-01.svg" />
                  </div>
                </td>
                <td class="col-sm-10">
                  <div class="row mar10">
                    <h2 class="text-green">Data Querying</h2>
                    <div class="thickdiv mar10-bot mar10-top"></div>
                    <p class=" text-lblue">
                      Sprocket also implements a secure, robust query API to allow external services access to the wealth of data collected on users and user group.  Current customers have used this to implement their own Data Dashboards, letting them drill into user gameplay sessions to see how their players compare, where they succeed, and where they fail.
                    </p>
                  </div>
                </td>
              </tr>
            </table>
          </div><!-- END: Data Querying -->

          <!-- Remote Data Services -->
          <div class="row pad30-bot">
            <table class="sc-table">
              <tr>
                <td class="col-sm-2">
                  <div class="row bg-ddblue">
                    <img class="center-block cosmos-svg mar30" src="<?php echo get_template_directory_uri(); ?>/img/projects/sprocket/icon-remote-data-services-01.svg" />
                  </div>
                </td>
                <td class="col-sm-10">
                  <div class="row mar10">
                    <h2 class="text-green">Remote Data Services</h2>
                    <div class="thickdiv mar10-bot mar10-top"></div>
                    <p class=" text-lblue">
                      Sprocket implements two highly useful services for the constantly connected world, Remote Configuration and Remove Saving.  Remote Configuration allows games to be deployed and quickly updated remotely without the need for a client install update.  This can be very useful for changing content on-the-fly, or even doing experimental rollouts like A/B testing.  Remote Saving then allows a user to save their game progress remotely, allowing continued play across multiple devices as well as preventing progress loss in the event of a hardware failure or other user data corruption event.
                    </p>
                  </div>
                </td>
              </tr>
            </table>
          </div><!-- END: Remote Data Services -->

        </div><!-- /.row pad60 -->
      </div><!-- /.row bg-ddblue -->

      <!-- Why Make Sprocket -->
      <div class="row pad60 bg-green mar20-bot">
        <h3 class="text-white">Why Make Sprocket?</h3>
        <div class="thickdiv mar10-bot mar10-top"></div>
        <p class="text-ddblue">
          Several years prior to the development of Sprocket, Games+Learning+Society alums, under the direction of Rich Halverson, developed our original data collection platform, ADAGE.  This tool served us well but it missed some critical functionality at its core.  Experimentation with other commercial data collection services led us to realize that no existing toolsets really gave us the granularity and control we needed for our games and research.  After thoroughly exploring the market, we were determined to create a new, better system that embraced the following simple requirements:
        </p>
        <ol class="disc text-ddblue mar20">
          <li>Non-structured Data Format</li>
          <li>Nested Data</li>
          <li>Customizable Authentication</li>
          <li>Modular Designs</li>
          <li>One-Click Deployment</li>
        </ol>
        <p class="text-ddblue">
          The end result of this was a product we internally codenamed RData!  This service was used for several internal and external projects and is now fully available for all future projects.
        </p>
      </div><!-- END: Why Make Sprocket -->

      <!-- Where Does Sprocket Live -->
      <div class="row pad60 bg-ddblue mar20-bot">
        <h3 class="text-green">Where Does Sprocket Live?</h3>
        <div class="thickdiv mar10-bot mar10-top"></div>
        <p class="text-lblue">
          Sprocket is designed to modern standards, and as such, is able to be hosted on any modern hosting platform.  While Sprocket backed games are being developed, our development environment is hosted with Amazon Web Services.  However, Sprocket can be quickly deployed on other cloud platforms such as Digital Ocean, or even a custom server!
        </p>
      </div><!-- END: Where Does Sprocket Live -->

      <!-- Where Does Sprocket Live -->
      <div class="row pad60 bg-green mar20-bot">
        <h3 class="text-white">Who Made Sprocket?</h3>
        <div class="thickdiv mar10-bot mar10-top"></div>
        <p class="text-ddblue">
          Sprocket was the brainchild of Leonid Umanskiy and was principally developed while he worked for Gear Learning at UW-Madison.  Gear Learning continues development of the project which can be found here: <a class="text-ddblue" href="https://github.com/rdata-systems" target="_blank"><strong>https://github.com/rdata-systems</strong></a>.
        </p>
      </div><!-- END: Where Does Sprocket Live -->

      <!-- How is Sprocket Used -->
      <div class="row pad60 bg-ddblue mar20-bot">
        <h3 class="text-green">How is Sprocket Used?</h3>
        <div class="thickdiv mar10-bot mar10-top"></div>
        <p class="text-lblue">
          While Gear Learning develops for several platforms, our primary tool is the Unity3D game engine.  Given this, our most developed client is made for Unity, employing many of the concepts we utilize during game development.  Those client classes are designed to be dropped directly into a project and configured through standard inspector interfaces.  The steps are simple!
        </p>
        <ol class="disc text-lblue mar20">
          <li>Install the Sprocket Server Modules with Authentication at a mimimum</li>
          <li>Drop the client DLLs into Unity</li>
          <li>Create prefabs for authentication ( or more ) and configure URLs</li>
        </ol>
        <p class="text-lblue">
          And you’re off and running!  Specifics of these steps are all available through the GitHub pages here: <a href="https://github.com/rdata-systems" target="_blank">https://github.com/rdata-systems</a>.
        </p>
      </div><!-- END: How is Sprocket Used? -->

    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
