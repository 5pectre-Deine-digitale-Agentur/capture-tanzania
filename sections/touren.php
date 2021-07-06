<section id="tours">

  <?php $args = array(
    'post_type' => 'Spectre-blank',
    'posts_per_page' => 200000,
    'orderby' => 'ASC'
  );

    $loop = new WP_Query( $args );
    $count = 0;
    while ( $loop->have_posts() ) : $loop->the_post();

    $img = get_field('img');
    $detail_desc = get_field('detail_short_desc'); ?>

    <?php  if ($count++ % 2 == 0): ?>

    <div class="container slide__content">
      <div class="row">
        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 detail__img">
          <div class="image__container">
            <img class="detail__image" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
          </div>
        </div>
        <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12 detail__card">
          <div class="content">
            <h2><?php echo the_title(); ?></h2>
            <p><?php echo $detail_desc ?></p>
            <div class="gallery">

              <?php
              $images = get_field('gallery');
              if( $images ): ?>
                <?php foreach( $images as $image ): ?>
                  <div class="gallery__item">
                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                  </div>
                <?php endforeach;
              endif; ?>

            </div>
            <a href="<?php echo the_permalink(); ?>" class="button tertiary" onclick="trigger()">
              Book now!
              <div class="dot">
                <i class="fas fa-chevron-right" aria-hidden="true"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php $post_count++; else: ?>

      <div class="container slide__content">
        <div class="row flex-column-reverse flex-lg-row">
          <div class="col-xxl-8 col-xl-8 col-lg-7 col-md-12 col-sm-12 col-12 detail__card">
            <div class="content">
              <h2><?php echo the_title(); ?></h2>
              <p><?php echo $detail_desc ?></p>
              <div class="gallery">

                <?php
                $images = get_field('gallery');
                if( $images ): ?>
                  <?php foreach( $images as $image ): ?>
                    <div class="gallery__item">
                      <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                  <?php endforeach;
                endif; ?>

              </div>
              <a href="<?php echo the_permalink(); ?>" class="button tertiary" onclick="trigger()">
                Book now!
                <div class="dot">
                  <i class="fas fa-chevron-right" aria-hidden="true"></i>
                </div>
              </a>
            </div>
          </div>
          <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-12 col-sm-12 col-12 detail__img">
            <div class="image__container reverse">
              <img class="detail__image" src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            </div>
          </div>
        </div>
      </div>
      <?php $post_count++; endif; ?>

    <?php wp_reset_query();?>
  <?php endwhile; ?>

  <script type="text/javascript">
  let el = document.querySelectorAll('.gallery__item');
  let n = el.length;
  let btns = document.querySelector('.button__container.offer_button__container');
  let height = document.querySelector('.detail__card').offsetHeight;

  if (jQuery(window).width() >= 992 && jQuery(window).width() > 768) {

    for (i = 0; i < n; i++) {
      el[i].style.height = document.querySelector('.gallery__item').offsetWidth + "px";
    }

  } else {
    for (i = 0; i < n; i++) {
      el[i].style.height = "150px";
    }
  }
  </script>

</section>
