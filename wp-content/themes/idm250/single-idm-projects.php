<?php get_header();?>

  <div class="everything">

    <div class="case_content">
    <?php while (have_posts()) : the_post(); ?>

        
    <?php the_content(); ?>
    <!-- end content -->

<?php endwhile; ?>
</div></div>
<?php get_footer();?>