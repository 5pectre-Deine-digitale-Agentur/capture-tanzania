<section id="details" class="offer__details">
  <div class="splide__2">
    <div class="splide__track">
      <ul class="splide__list">

        <?php $args = array(
          'post_type' => 'Spectre-blank',
          'posts_per_page' => 200000,
          'orderby' => 'ASC'
        );

          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();

          $img = get_field('img');
          $detail_desc = get_field('detail_short_desc'); ?>

        <li class="splide__slide">
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
                  <a href="<?php echo the_permalink(); ?>" class="button tertiary">
                    Book now!
                    <div class="dot">
                      <i class="fas fa-chevron-right" aria-hidden="true"></i>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li>

        <?php wp_reset_query();?>
      <?php endwhile; ?>

      </ul>
    </div>
    <div class="splide__arrows container">
      <div class="button__container offer_button__container">
        <button class="splide__arrow splide__arrow--prev"><i class="fas fa-arrow-left"></i></button>
        <button class="splide__arrow splide__arrow--next"><i class="fas fa-arrow-right"></i></button>
      </div>
    </div>
  </div>
  <?php $det_background = get_sub_field('details_background'); ?>
  <div class="background" style="background: url('<?php echo $det_background ?>'); background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
  <script type="text/javascript">
    if (jQuery(window).width() <= 992 && jQuery(window).width() > 768) {
      btns.style.top = - height - 170 + "px";
    } else if (jQuery(window).width() <= 768 && jQuery(window).width() > 576) {
      btns.style.top = - height - 360 + "px";
    } else if (jQuery(window).width() <= 576) {
      btns.style.top = - height - 400 + "px";
    }
  </script>
  <script type="text/javascript">
  document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide__2', {
      type   : 'loop',
      perPage: 1,
      perMove: 1,
      focus  : 0,
      pagination: false,
    } ).mount();
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
  } );
  </script>
</section>
