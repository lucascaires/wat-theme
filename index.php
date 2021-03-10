<?php get_header(); ?>
<div>
  <div class="container mx-auto">
    <section class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 m-2 py-10">
    <?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template/post-item');
        }
    }
    ?>
    </section>
    <?php 
      get_template_part('components/pagination');
    ?>    
  </div>
</div>
<?php get_footer(); ?>