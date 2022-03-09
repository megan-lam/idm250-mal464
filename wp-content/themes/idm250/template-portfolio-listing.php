<?php
/* Template Name: Portfolio Listing */
?>
<?php get_header();?>
<?php while (have_posts()) : the_post(); ?>

    <div class="">


        <div class="">
            <?php the_content(); ?>
        </div>
    </div>

<?php endwhile; ?>
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