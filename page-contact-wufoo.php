<?php
/*
 Template Name: Contact Wufoo
*/
?>

<?php get_header(); ?>
<?php include ('nav.php'); ?>

<!--
  BEGIN: Main Content
-->
  <div class="container-fluid mar20-top mar20-bot">
    <div class="container pad30-left pad30-right">
      <div class="row">
        <div class="row pad30-top pad20-bot">
          <h1 class="text-green"><span class="text-white">Contact</span> Us</h1>
        </div>
        <div class="row pad30 bg-ddblue">
        <div id="wufoo-z8za9am06c54t1" class="pad20">
        </div>
        <div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;">Use <a href="http://www.wufoo.com/gallery/templates/">Wufoo templates</a> to make your own HTML forms.</div>
        <script type="text/javascript">var z8za9am06c54t1;(function(d, t) {
        var s = d.createElement(t), options = {
        'userName':'jsrgearlearning',
        'formHash':'z8za9am06c54t1',
        'autoResize':true,
        'height':'663',
        'async':true,
        'host':'wufoo.com',
        'header':'hide',
        'ssl':true};
        s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
        s.onload = s.onreadystatechange = function() {
        var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
        try { z8za9am06c54t1 = new WufooForm();z8za9am06c54t1.initialize(options);z8za9am06c54t1.display(); } catch (e) {}};
        var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
        })(document, 'script');</script>

        </div>
      </div>
      <div class="row pad30">
        <p class="text-lblue text-center">
          Gear Learning is part of the <a href="http://www.wcer.wisc.edu/about/contact" taget="_blank">Wisconsin Center for Education Research</a> in the <a href="http://www.wisc.edu/" target="_blank">University of Wisconsin-Madison's</a> <a href="http://www.education.wisc.edu/" target="_blank">School of Education</a>.
        </p>
      </div>
    </div><!-- /.container -->
  </div><!-- /.container-fluid -->
<!-- END: Main Content -->

<?php get_footer(); ?>
