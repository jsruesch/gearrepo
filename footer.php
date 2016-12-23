<!--
  BEGIN: Footer
-->
	<div class="footer-container container-fluid">
		<div class="container">
			<div class="row mar20-bot">
				<img class="footer-logo center-block" src="<?php echo get_template_directory_uri(); ?>/img/gear-logo.svg"/>
			</div>
			<div class="row mar20-bot">
				<h3 class="text-green">GEAR Learning</h3>
			</div>
			<div class="row">
				<p class="text-lblue small">
					Educational Sciences Room 145, 1025 West Johnson Street <br/>Madison, WI 53706<i class="fa fa-circle small-icon" aria-hidden="true"></i>
				 	Ph: 555-555-5555
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
	<!-- Don't forget analytics -->
</body>
</html>
