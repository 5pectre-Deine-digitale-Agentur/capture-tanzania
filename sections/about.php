<?php
$about = get_sub_field('about_text');
$about_tours = get_sub_field('about_text_button');
$about_tours_url = $about_tours['url'];
$about_tours_title = $about_tours['title'];
$about_title = get_sub_field('about_title');
$about_subtitle = get_sub_field('about_subtitle');
$about_desc = get_sub_field('about_desc');
$about_img = get_sub_field('about_image'); ?>

<section id="about">
  <div class="card container-fluid">
    <div class="row">
      <div class="letter col-xxl-5 col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="content__container">
          <?php echo $about; ?>
          <?php if ($about_tours): ?>
            <a href="<?php echo esc_url( $about_tours_url ); ?>" class="button secondary"><i class="far fa-compass"></i><span><?php echo esc_html( $about_tours_title ); ?></span></a>
          <?php endif; ?>
        </div>
      </div>
      <div class="content col-xxl-7 col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="text">
          <h3><?php echo $about_title ?></h3>
          <p><?php echo $about_subtitle ?></p>
          <div class="box">
            <div class="pic">
              <?php if( !empty( $about_img ) ): ?>
                <img src="<?php echo esc_url($about_img['url']); ?>" alt="<?php echo esc_attr($about_img['alt']); ?>">
              <?php endif; ?>
            </div>
            <div class="right">
              <p><?php echo $about_desc; ?></p>
              <?php $about_cta_link = get_sub_field('about_cta_button');
                $about_cta_link_url = $about_cta_link['url'];
                $about_cta_link_title = $about_cta_link['title'];
                $about_cta_link_target = $about_cta_link['target'] ? $link['target'] : '_self';
              ?>
              <a href="<?php echo esc_url( $about_cta_link_url ); ?>" class="button secondary" target="<?php echo esc_attr( $about_cta_link_target ); ?>"><i class="far fa-compass"></i><span><?php echo esc_html( $about_cta_link_title ); ?></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
