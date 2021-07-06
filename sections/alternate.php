<section id="alternate">
  <div class="container">
      <?php
      $alignment = get_sub_field('alignment');
      $alt_image = get_sub_field('alt_image');
      $alt_title = get_sub_field('alt_title');
      $alt_text = get_sub_field('alt_text');
      ?>
      <?php if ( $alignment == 'Text links, Bild rechts' ):?>
      <div class="row flex-column-reverse flex-lg-row">
        <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12 detail__card">
          <div class="content">
            <h2><?php echo $alt_title ?></h2>
            <?php echo $alt_text ?>
            <?php if( have_rows('alternate_buttons') ): ?>
              <?php while( have_rows('alternate_buttons') ): the_row();
                  $alternate = get_sub_field('alternate');
                  $alternate_url = $alternate['url'];
                  $alternate_title = $alternate['title'];
                  $alternate_target = $alternate['target'] ? $alternate['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $alternate_url ); ?>" class="button tertiary" target="<?php echo esc_attr( $alternate_target ); ?>">
                  <?php echo esc_html( $alternate_title ); ?>
                  <div class="dot">
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 detail__img">
          <div class="image__container reverse">
            <img class="detail__image" src="<?php echo esc_url($alt_image['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
          </div>
        </div>
      </div>

      <?php else: ?>

      <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 detail__img">
          <div class="image__container">
            <img class="detail__image" src="<?php echo esc_url($alt_image['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
          </div>
        </div>
        <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12 detail__card">
          <div class="content">
            <h2><?php echo $alt_title ?></h2>
            <?php echo $alt_text ?>
            <?php if( have_rows('alternate_buttons') ): ?>
              <?php while( have_rows('alternate_buttons') ): the_row();
                  $alternate = get_sub_field('alternate');
                  $alternate_url = $alternate['url'];
                  $alternate_title = $alternate['title'];
                  $alternate_target = $alternate['target'] ? $alternate['target'] : '_self';
                ?>
                <a href="<?php echo esc_url( $alternate_url ); ?>" class="button tertiary" target="<?php echo esc_attr( $alternate_target ); ?>">
                  <?php echo esc_html( $alternate_title ); ?>
                  <div class="dot">
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    </div>
  </div>
</section>
