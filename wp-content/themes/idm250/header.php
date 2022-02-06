<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDM 250</title>
    <?php 
    //Link - https://developer.wordpress.org/reference/functions/wp_head/
    //Plugins and WordPress core use this function to insert crucial elements into your
    //Always put wp_head() just before the closing head tag
    wp_head();
    ?>
</head>
<body>
<?php
//Registered this menu in functions.php
wp_nav_menu(
    [
        'theme_location' => 'primary_menu'
    ]
);