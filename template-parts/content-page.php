<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package oceansapart
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php $hero_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail-full' );?>
  <?php if( have_rows('hero_image') ): ?>
  <div class="grid-container">
    <div class="grid-x" data-equalizer>
      <?php while( have_rows('hero_image') ): the_row(); ?>
      <div class="cell medium-6 large-7"> <img src="<?php echo $hero_image[0];?>" class="img-responsive" alt=""> </div>
      <div class="cell medium-6 large-5 callout alert text-center align-self-stretch">
        <h2>
          <?php the_sub_field('headline'); ?>
        </h2>
        <p>
          <?php the_sub_field('paragraph'); ?>
        </p>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <?php endif; ?>
</article>
<!-- #post-<?php the_ID(); ?> -->