<?php
    // Has to be done in the loop so we have access to the featured image ID
    $featured_image = idm_get_asset_by_id(get_post_thumbnail_id());
    // Image doesn't exist, lets add a placeholder image to force user to upload an image.
    if (!$featured_image) {
        $featured_image['alt'] = 'Missing Image';
        $featured_image['src'] = '//via.placeholder.com/1058x705';
    };

    // Get project categories from this post ID
    $project_categories = get_the_terms(get_the_ID(), 'idm-project-categories');

?>
    <div class="center">

        <div class="box">
            <picture>
            <img class="item"
                src="<?php echo $featured_image['src']; ?>"
                alt="<?php echo $featured_image['alt']; ?>">     
        </picture>
        
        <div class="work_container">
            <div class="info_text">
            <h1 class="proj_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
            <h3 class="summary"> <?php the_excerpt(); ?></h3>
            </div>
        </div></a>
        </div>
        
    </div>

