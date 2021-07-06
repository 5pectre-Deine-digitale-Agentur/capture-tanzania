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
   include 'sections/details.php';
  } elseif ( $sections == "Map" ) {
    include 'sections/map.php';
  } elseif ( $sections == "Newsletter Sign-In" ) {
    include 'sections/cta.php';
  } elseif ( $sections == "Instagram Feed" ) {
    include 'sections/insta.php';
  } elseif ( $sections == "Safari Buchen" ) {
    include 'sections/offer.php';
  } elseif ( $sections == "Touren" ) {
    include 'sections/touren.php';
  } elseif ( $sections == "Sansibar Touren" ) {
    include 'sections/sansibar.php';
  } elseif ( $sections == "Textinhalt" ) {
    include 'sections/section.php';
  } elseif ( $sections == "Alternierender Inhalt" ) {
    include 'sections/alternate.php';
  } elseif ( $sections == "About" ) {
    include 'sections/about.php';
  } ?>

 <?php endwhile; ?>
<?php endif; ?>

</div>
<?php get_footer(); ?>
