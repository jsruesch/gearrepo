<!--
  BEGIN: Footer
-->
	<div class="footer-container container-fluid">
		<div class="container">
			<div class="row mar20-bot">
				<img class="footer-logo center-block" src="<?php echo get_template_directory_uri(); ?>/img/gear-at-wcer-logo.svg"/>
			</div>
			<div class="row mar30-bot">
				<p class="text-lblue small">
					GEAR is housed within the Wisconsin Center for Education Research<br /> at the School of Education, University of Wisconsin-Madison.
				</p>
			</div>
			<div class="row mar30-bot">
				<p class="text-lblue small">
					Educational Sciences Room 146, 1025 West Johnson Street <br/>Madison, WI 53706
					<!-- <i class="fa fa-circle small-icon" aria-hidden="true"></i> Ph: 555-555-5555 -->
				</p>
			</div>
			<div class="row">
				<nav>
					<ul>
						<?php include ('nav-links.php'); ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
<!-- END: Footer -->


	<?php wp_footer(); ?>
	<!-- Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-89927946-1', 'auto');
	  ga('send', 'pageview');
	</script>

</body>
</html>
