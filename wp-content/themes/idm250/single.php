<?php get_header();?>


  <div class="everything">

    <div class="case_content">
    <a id="top"></a>
            <img class="hero_img" src="https://megan-lam.com/images/petes_lg.jpg">
    <?php while (have_posts()) : the_post(); ?>

        <h1 class="single"><?php the_title(); ?>
        </h1>
  <div class="portfolio_content">
  <h2 class="head">CONTEXT & CHALLENGE</h2>
    <h3 class="head2">BACKGROUND</h3>
    <p class="case">Pete’s Little Lunch Box is a food truck on Drexel’s campus that serves 
    breakfast and lunch with a focus on fast comforting food. They have a dedicated customer 
    base that varies from students and professors to local construction workers.</p> 
    
    <h4 class="head2">GOALS</h4>
    <ul class= "goals">
        <li class= "list">Create a prototype of an app</li>
        <li class= "list">Research the client and find out their needs</li>
        <li class= "list">Research potential user base and analyze the user needs</li>
        <li class= "list">From this information come up with features that will help both the users and the client</li>
        <li class= "list">Create an initial wireframe, then iterate on the ideas and features in it based on feedback from usability testing
        </li>
    </ul>

    <video class="vid" width="400" controls>
  <source src="/dist/images/glitch.mp4" type="video/mp4">
  Your browser does not support HTML video.
</video>

    <div class="pull_quote">
           <h1 class="proj_name"> The ordering process is not as efficient as it could be and does not utilize all of the benefits of living in the mobile device dominated world that we live in. </h1>
        </div>

        <h5 class="proj_name2"> Process & Insight</h5>
            <h6 class="class_name2"> Canvas Models </h6>
            <p class="case">Pete’s Little Lunch Box is a food truck on Drexel’s campus that serves 
                breakfast and lunch with a focus on fast comforting food. They have a dedicated customer 
                base that varies from students and professors to local construction workers.</p> 

        <h6 class="class_name3"> Information Architecture </h6>
        <p class="case">Our approach to tackling the user flow of the app began by sketching out possible tasks that we would want to include. 
            Each group member made their own sketches, and we began to pick and choose which ideas we liked from each of our sketches. </p>

            <h4 class="head2">RESEARCH TYPES</h4>
        <ul class= "goals">
        <li class= "list2">Journey Maps</li>
        <li class= "list2">Canvas Models</li>
        <li class= "list2">Paper Prototypes</li>
        <li class= "list2">Usability Tests</li></li>
        </ul>        

            <a href="https://www.figma.com/file/lJpwAFk9iomOrxFYZVx1bw/IDM-216---Pete's-Little-Lunch-Box?node-id=1934%3A2279">
        <h3 class="link">Link to project</h3></a>
          <div class="main_img">
            <img class="hero_img" src="https://megan-lam.com/images/petes_lg.jpg">
        </div><p class="caption">Pete's Little Lunch Box Truck</p>

        <table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td>Pete's Little Lunch Box</td>
    <td>215-605-1228</td>
  </tr>
</table>

<h3 class="head">RESULTS</h3>
        <p class="case">From the initial stages of research, our team had a clear vision for the look and feel we wanted to create for our prototype. 
        Through weeks of testing and iterating, we were able to hone in on specific design details that led to the success of our food truck app.</p>

        <p class="case">Despite our app being successful, our group would’ve loved to include more features and functionality within the app. If given 
        more time,  we would integrate Yelp or Google reviews into the app in order to give customers the ability to leave their feedback as well as 
        see what other users have to say about their experience with the app and the truck in general. In addition, we would have interviewed the owners 
        of the truck to have more information and details for the ‘About’ page. We also would’ve liked to include more artistic assets for an even more 
        personal feel within the app.</p>

        <a href="#top"><button class= "topbtn" type="button">BACK TO TOP</button></a>
    <?php the_content(); ?>
    <!-- end content -->
  </div>
</div></div>
<?php endwhile; ?>

<?php get_footer();?>