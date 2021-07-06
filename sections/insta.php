<section id="insta" class="insta__feed">
  <?php
    $insta = get_sub_field('insta_shortcode');
    $social_title = get_sub_field('social_title');
    $social_desc = get_sub_field('social_desc');
   ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="insta__title">
          <h2><?php echo $social_title; ?></h2>
          <p><?php echo $social_desc ?></p>
        </div>
        <?php echo do_shortcode($insta);?>
      </div>
    </div>
  </div>
</section>
