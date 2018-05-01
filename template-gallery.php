<?php
/**
 * Template Name: Gallery Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <!-- Fotorama -->
<div class="fotorama" data-width="700" data-ratio="700/467" data-max-width="100%">
  <img src="http://s.fotorama.io/okonechnikov/1-lo.jpg">
  <img src="http://s.fotorama.io/okonechnikov/2-lo.jpg">
  <img src="http://s.fotorama.io/okonechnikov/9-lo.jpg">
  <img src="http://s.fotorama.io/okonechnikov/6-lo.jpg">
  <img src="http://s.fotorama.io/okonechnikov/5-lo.jpg">
</div>

<!-- © -->
<p>Photos <a href="http://okonet.ru/">by Andrey Okonetchnikov</a></p>
<?php endwhile; ?>
