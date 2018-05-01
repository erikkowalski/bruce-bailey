
<?php

$images = get_field('artwork_gallery');
$size = 'large'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <div class="fotorama" data-width="100%" data-height="900px"  data-max-width="100%" data-nav="thumbs" data-allowfullscreen="true" data-loop="true">
        <?php foreach( $images as $image ): ?>

           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" data-caption="<?php echo $image['description'] ?>" />


        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php get_template_part('templates/content-single', get_post_type()); ?>
