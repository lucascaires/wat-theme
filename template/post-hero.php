<a href="<?php echo get_permalink(); ?>" class="p-10 grid cols-3">
  <div class="col-span-2">
    <img src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="<?php echo get_the_title(); ?>">
  </div>
  <h2>
    <?php echo get_the_title(); ?>
  </h2>
</a>