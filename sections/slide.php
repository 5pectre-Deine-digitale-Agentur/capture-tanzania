<?php
  $slide_title = get_sub_field('slider_title');
  $slide_desc = get_sub_field('slider_desc');
?>

<section id="slide" class="offer__slides">
  <div class="container-fluid slide__container">
    <script type="text/javascript">
      document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '.splide', {
          type   : 'loop',
          perPage: 4,
          perMove: 1,
          focus  : 0,
          pagination: false,
          breakpoints: {
            1400: {
              perPage: 4
            },
            1200: {
              perPage: 3
            },
            960: {
              perPage: 2
            },
            768: {
              perPage: 1
            },
            576: {
              perPage: 1
            },
          }
        } ).mount();
      } );
    </script>
        <div class="splide row">
          <div class="splide__arrows col-ccl-3 col-xl-3 col-lg-4 col-md-5 col-sm-6 col-6">
            <h2><?php echo $slide_title ?></h2>
            <p><?php echo $slide_desc ?></p>
            <div class="button__container">
              <button class="splide__arrow splide__arrow--prev"><i class="fas fa-arrow-left"></i></button>
              <button class="splide__arrow splide__arrow--next"><i class="fas fa-arrow-right"></i></button>
            </div>
          </div>
          <div class="splide__track col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-6 col-6">
            <ul class="splide__list">

              <?php $args = array(
                'post_type' => 'Spectre-blank',
                'posts_per_page' => 200000,
                'orderby' => 'ASC'
              );

                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();

                $img = get_field('img'); ?>

                <li class="splide__slide"><a href="<?php echo the_permalink(); ?>">
                  <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" />
                  <h3 class="highlight"><?php echo the_title(); ?></h3>
                </a></li>

                <?php wp_reset_query();?>
              <?php endwhile; ?>

            </ul>
          </div>
        </div>

    </div>
  </div>
</section>
