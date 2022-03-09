<?php get_header();?>
<div class="everything">

<div class="case_content">
<?php while (have_posts()) : the_post(); ?>
<div class="">
  <h1 class=""><?php the_title(); ?>
  </h1>

  <?php the_post_thumbnail(); ?>

  <div class="">
    <!-- start content -->
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div>
<?php endwhile; ?>
<?php get_footer();?>