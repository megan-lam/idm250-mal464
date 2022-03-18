<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title();?> | IDM 250</title>
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri() ?>/dist/images/logo.png"/>


    <?php 
    //Link - https://developer.wordpress.org/reference/functions/wp_head/
    //Plugins and WordPress core use this function to insert crucial elements into your
    //Always put wp_head() just before the closing head tag
    wp_head();
    ?>
</head>
<body <?php body_class(); 
//check if u need to add to pages with bg image ?>>

<?php
//Registered this menu in functions.php
wp_nav_menu(
    [
        'theme_location' => 'primary_menu']);
get_template_part('search-form');