<?php
  $background = get_sub_field('background');
  $call = get_sub_field('title');
  $desc = get_sub_field('desc');
 ?>
<section id="cta" class="call__to__action" style="background: url(<?php echo esc_html($background['url']); ?>); background-position: center; background-size: cover; background-repeat: no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="highlight"><?php echo $call; ?></h2>
        <?php echo $desc; ?>
      </div>
    </div>
  </div>
</section>
