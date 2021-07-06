
  <section id="offer">
    <div class="splide">
      <div class="splide__track">
        <ul class="splide__list">
          <?php
          $images = get_field('gallery');
          if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <li class="splide__slide">
                <div class="img__container" style="background: url('<?php echo esc_url($image['sizes']['large']); ?>')"></div>
              </li>
            <?php endforeach;
          endif; ?>
        </ul>
      </div>
      <div class="splide__arrows button__container">
        <button class="splide__arrow splide__arrow--prev"><i class="fas fa-arrow-left"></i></button>
        <button class="splide__arrow splide__arrow--next"><i class="fas fa-arrow-right"></i></button>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 offer__img">
          <?php
          $images = get_field('gallery');
          if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endforeach;
          endif; ?>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 offer__content">
          <div class="sticky__container">
            <div class="content">
              <div class="call_to__action">
                <h2><?php echo the_title(); ?></h2>
                <p><?php echo the_sub_field('description'); ?></p>
                <div class="gallery">
                  <?php
                  $images = get_sub_field('images');
                  if( $images ): ?>

                    <?php foreach( $images as $image ): ?>
                      <div class="gallery__item">
                        <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      </div>
                    <?php endforeach;
                  endif; ?>

                </div>
                <div href="#" class="button tertiary" onclick="trigger()">
                  Book now!
                  <div class="dot">
                    <i class="fas fa-chevron-right"></i>
                  </div>
                </div>
              </div>
              <div class="booking">
                <h2>Buche jetzt dein eigenes Abenteuer</h2>
                <p>
                  <?php echo do_shortcode('[forminator_form id="401"]'); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<script type="text/javascript">
let el = document.querySelectorAll('.gallery__item');
let n = el.length;

for (i = 0; i < n; i++) {
  el[i].style.height = document.querySelector('.gallery__item').offsetWidth + "px";
}

function trigger() {
  document.querySelector('.content').classList.add('active');
}

document.addEventListener( 'DOMContentLoaded', function () {
  new Splide( '.splide', {
    type   : 'loop',
    perPage: 1,
    perMove: 1,
    focus  : 0,
    pagination: false,
  } ).mount();
} );
</script>
