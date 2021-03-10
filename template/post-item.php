<a
  href="<?php echo get_permalink(); ?>"
  class="flex flex-col shadow-lg hover:shadow-2xl rounded-lg overflow-hidden transition-transform duration-500 transform hover:-translate-y-3"
>
  <img
    class="h-64 w-full object-cover"
    src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>"
    alt="<?php echo get_the_title(); ?>"
  />
  <div class="p-6 text-gray-700 flex flex-1 flex-col">
    <div class="flex space-x-1">
      <?php foreach(get_the_category() as $cat): ?>
        <span class="text-purple-500 text-xs uppercase tracking-wider">
          <?php echo $cat->name ?>
        </span>
      <?php endforeach; ?>
    </div>
    <h2 class="text-lg font-bold my-3 tracking-normal">
      <?php echo get_the_title(); ?>
    </h2>
    <p class="text-sm flex-1">
      <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
    </p>
    <span class="block text-sm tracking-widest mt-3 text-purple-500 hover:text-purple-600">Read more →</span>
  </div> 
</a>