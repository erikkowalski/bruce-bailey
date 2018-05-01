<?php while (have_posts()) : the_post(); ?>
 <img class="img-responsive" src="<?php the_field("home_image") ?>" alt="Grante Mountain">
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
