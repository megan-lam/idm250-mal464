<?php
/* Template Name: About */
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
<div class="everything">
<div class="about_content">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>
<?php get_footer();?>