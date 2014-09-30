<div class="uw-image-content">

  <?php echo wp_get_attachment_image($post->ID, 'full', false, $attr=array('class' =>'attachment-full center-block')); ?>

  <h1 class="entry-title"><?php the_title(); ?></h1>

  <?php the_excerpt(); ?>

  <div>
    <a href="<?php echo wp_get_attachment_url(get_the_ID());?>" title="<?php the_title(); ?>" target="_blank" download="<?php the_title() ?>">Download</a>
  </div>

</div>
