<section id="map">
  <?php
  $map = get_sub_field('map');
  $map_title = get_sub_field('map_title');
  $map_subtitle = get_sub_field('map_subtitle');
  $map_desc = get_sub_field('map_desc');
  $map_img = get_sub_field('map_image');?>

  <div class="card container-fluid">
    <div class="row">
      <div class="map col-xxl-5 col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 order-2 order-xl-1">
        <div class="map">
          <?php echo $map; ?>
        </div>
      </div>
      <div class="content col-xxl-7 col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 order-1 order-xl-2">
        <div class="text">
          <h3><?php echo $map_title; ?></h3>
          <p><?php echo $map_subtitle; ?></p>
          <div class="box">
            <div class="pic">
              <?php if( !empty( $map_img ) ): ?>
                <img src="<?php echo esc_url($map_img['url']); ?>" alt="<?php echo esc_attr($map_img['alt']); ?>">
              <?php endif; ?>
            </div>
            <div class="right">
              <div class="button__container">

                <?php if( have_rows('map_buttons') ): ?>
                  <?php while( have_rows('map_buttons') ): the_row();
                      $link = get_sub_field('map_button');
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="button quartus"><i class="fas fa-chevron-right"></i><span><?php echo esc_html( $link_title ); ?></span></a>
                  <?php endwhile; ?>
                <?php endif; ?>

              </div>
              <?php echo $map_desc; ?>
              <?php $cta_link = get_sub_field('map_cta_button');
                $cta_link_url = $cta_link['url'];
                $cta_link_title = $cta_link['title'];
                $cta_link_target = $cta_link['target'] ? $link['target'] : '_self';
              ?>
              <a href="<?php echo esc_url( $cta_link_url ); ?>" class="button secondary" target="<?php echo esc_attr( $cta_link_target ); ?>"><i class="far fa-compass"></i><span><?php echo esc_html( $cta_link_title ); ?></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    let map = document.querySelector('iframe');
    let dim = map.width;
    map.style.height = dim + 'px';
  </script>
</section>
