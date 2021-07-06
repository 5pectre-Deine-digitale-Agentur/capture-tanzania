<?php get_header(); ?>

<div class="main" role="main">

<?php if( have_rows('bereiche') ): ?>
  <?php while( have_rows('bereiche') ): the_row();

    $sections = get_sub_field('section');

    if ( $sections == "Hero" ) {
     include 'sections/hero.php';
    } elseif ( $sections == "Safari Slider" ) {
     include 'sections/slide.php';
    } elseif ( $sections == "Safari Details" ) {
     include 'sections/slide.php';
    } elseif ( $sections == "Map" ) {
      include 'sections/slide.php';
    } elseif ( $sections == "Newsletter Sign-In" ) {
      include 'sections/cta.php';
    } elseif ( $sections == "Instagram Feed" ) {
      include 'sections/slide.php';
    } elseif ( $sections == "Safari Buchen" ) {
      include 'sections/offer.php';
    } elseif ( $sections == "About" ) {
      include 'sections/about.php';
    } else {
     echo "";
   } ?>

 <?php endwhile; ?>
<?php endif; ?>

</div>
<?php get_footer(); ?>
