<!-- Replace with your Code -->

<section id="navigation" class="main-navigation">
  <div class="container">
    <div class="row">
      <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
        <a href="<?php echo get_home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo.svg" alt="">
        </a>
      </div>
      <div class="col-xxl-6 col-xl-6 col-lg-0 col-md-0 col-sm-0 col-0 contact__column">
        <div class="contact">
          <a href="tel:+491701904211" class="item call__planet">
            <div class="icon">
              <i class="fas fa-phone"></i>
            </div>
            <span>+49 170 1904211</span>
          </a>
          <a href="mailto:info@campturetanzania.com" class="item mail__planet">
            <div class="icon">
              <i class="fas fa-envelope"></i>
            </div>
            <span>info@campturetanzania.com</span>
          </a>
        </div>
      </div>
      <div class="col-xxl-4 col-xl-4 col-lg-10 col-md-6 col-sm-6 col-6 nav-menu__col">
        <div class="burger">
          <div class="line"></div>
        </div>
        <?php wp_nav_menu(array( 'theme_location' => 'main' )); ?>
      </div>
    </div>
  </div>
</section>
