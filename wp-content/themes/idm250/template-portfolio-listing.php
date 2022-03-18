<?php
/* Template Name: Project Listing */
 get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="container">
  <h1 class=""><?php echo get_the_title(); ?>
  </h1>


  <div class="grid-3">
    <?php
      // https://developer.wordpress.org/reference/classes/wp_query/
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

      $arg = [
          'post_type' => 'idm-projects',
          'post_status' => 'publish',
          'posts_per_page' => 9,
          'order' => 'DESC',
          'paged' => $paged

      ];
      $project_query = new WP_Query($arg);

      ?>
    <?php
        while ($project_query->have_posts()) : $project_query->the_post();
            get_template_part('components/project-teaser');
        endwhile;
        // Custom Pagination for Custom loops
        $big = 999999999; // need an unlikely integer
        echo paginate_links([
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $project_query->max_num_pages
        ]);
        echo '</nav>';
        // After looping through a separate query, this function restores the $post global to the current post in the main query.
        wp_reset_postdata();
      ?>
  </div>
</div>
<?php endwhile; ?>

<?php get_footer();?>
<!--
<h1 class="work_title">MY WORK</h1>
<?php
    get_template_part('search-form');?>
<div class="everything">
<div class="center">
    <div class="box">
    <a href="petes.html">
        <img class="item" src="https://megan-lam.com/images/petes_lg.jpg"></a>
    <div class="work_container">
    <a href="petes.html">
        <div class="info_text">
           <h1 class="proj_name"> Pete's Little Lunch Box App</h1>
            <h2 class="class_name"> UX DESIGN & RESEARCH </h2>
            <h3 class="summary">Design and develop a food ordering app for the food truck 
            Pete's Little Lunch Box </h3>
        </div>
    </div></a>
    </div></div>

    <div class="box2">
        <div class="work_container2">
            <a href="teado.html">
            <div class="info_text">
               <h1 class="proj_name"> Tea-Do Redesign</h1>
                <h2 class="class_name"> BRANDING & REDESIGN </h2>
                <h3 class="summary">Created a mid-fidelity 
                prototype that focused on usability by 
                incorporating user feedback and design principles. </h3>
            </div></a>
        </div>
        <a href="teado.html">
            <img class="item2" src="https://megan-lam.com/images/teado_lg.jpg"></a>
        </div>

    <div class="box">
        <a href="slate.html">
        <img class="item" src="https://megan-lam.com/images/slate_lg.jpg"></a>

        <div class="work_container">
            <a href="slate.html">
            <div class="info_text">
                <h1 class="proj_name"> Slate.com Redesign</h1>
                <h2 class="class_name"> UX RESEARCH & PROTOTYPING</h2>
                <h3 class="summary">Created high-fidelity prototypes for 
                desktop, mobile, and tablet devices using Sketch and Flinto.</h3>
            </div>
        </div></a>
        </div>
        </div>   
</div></div>
<?php get_footer();?>