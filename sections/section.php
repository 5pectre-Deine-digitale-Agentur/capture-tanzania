<?php $content = get_sub_field('text_content'); ?>
<section>
  <div class="container" style="margin-top: 20vh">
    <div class="row">
      <div class="col-12">
        <h1 style="margin-bottom: 50px"><?php the_title(); ?></h1>
        <?php echo $content ?>
      </div>
    </div>
  </div>
</section>
