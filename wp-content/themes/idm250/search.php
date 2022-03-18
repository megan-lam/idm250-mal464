<?php
/* Template Name: Search Page */

 get_header(); ?>
<?php
 $args = [
     's' => $_GET['s'],
     'post_type' => $_GET['post_type'],
 ];
 $search_query = new WP_Query($args)
?>
<div class="everything">
<h1 class="main_title"> Search Results </h1>
    <?php
  if ($search_query->have_posts()) {
      while ($search_query->have_posts()) : $search_query->the_post();
      get_template_part('components/project-teaser');
      endwhile;
      // After looping through a separate query, this function restores the $post global to the current post in the main query.
      wp_reset_postdata();
  } else {
      // no results
      echo '<p>Uh oh! There are no results here</p>';
  }

?>

</div>
<?php get_footer();