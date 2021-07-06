<?php
  $hero_background = get_sub_field('hero_background');
  $hero_subtitle = get_sub_field('hero_subtitel');
  $hero_button = get_sub_field('hero_button');

  $link = get_sub_field('hero_button');
  $link_url = $link['url'];
  $link_title = $link['title'];
  $link_target = $link['target'] ? $link['target'] : '_self';

?>

<section class="hero" id="hero" style="background: url('<?php echo $hero_background ?>'); background-position: bottom; background-size: cover">
  <div class="container">
    <div class="row">
      <div class="col-xxl-6 col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12">
        <h1 class="hero light-text"><?php the_title(); ?></h1>
        <p class="light-text"><?php echo $hero_subtitle; ?></p>
        <?php if ($link): ?>

          <a href="<?php echo esc_url( $link_url ); ?>" class="button primary" target="<?php echo esc_attr( $link_target ); ?>">
            <span><?php echo esc_html( $link_title ); ?> <i class="fas fa-chevron-right light"></i><i class="fas fa-chevron-right"></span></i>
          </a>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
