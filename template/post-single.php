<?php get_header(); ?>
<div class="bg-gray-100">
  <div class="container mx-auto">
    <section class="prose prose-purple mx-auto">
      <h1>
        <?php echo get_the_title(); ?>
      </h1>
      <?php the_content(); ?>
    </section>    
  </div>
</div>
<?php get_footer(); ?>

