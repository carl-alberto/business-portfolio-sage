<?php
/**
 * Template Name: With Slider
 */
?>

<?php get_template_part('templates/content','homeslider'); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
