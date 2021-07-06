<footer>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/logos/logo.svg" alt="Logo" class="logo-img">
						</a>
					</div>
					<div class="information">
						<p><?php bloginfo('description'); ?></p>
					</div>
				</div>
				<div class="col-xxl-1 col-xl-1 col-lg-1 col-md-0 col-sm-0 col-0 spacer"></div>
				<div class="col-xxl-2 col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					<div class="sitemap">
						<h4>Sitemap</h4>
						<?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
					</div>
				</div>
				<div class="col-xxl-2 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="legal">
						<h4>Rechtliches</h4>
						<?php wp_nav_menu(array( 'theme_location' => 'legal' )); ?>
					</div>
				</div>
				<div class="col-xxl-4 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="contact">
						<h4>Contact</h4>
						<p>Feel free to get in touch with us via phone or send us a message</p>
						<p>
							<a href="tel:+491701904211" class="contact">+49 170 1904211</a>
						</p>
						<p>
							<a href="mailto:info@capturetanzania.com" class="contact">info@capturetanzania.com</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="copy">
		<div class="wrapper">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'Spectreblank'); ?><a href="https://5pectre.com" title="Spectre Blank">5pectre</a>.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
