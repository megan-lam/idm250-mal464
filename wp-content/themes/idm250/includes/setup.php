<? function include_styles()
{
    // Example of including an external link
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap');

    // Example of including a style local to your theme root
    wp_enqueue_style(
        'idm250-css',
        get_template_directory_uri() . '/dist/styles/style.css'
    );
}

add_action('wp_enqueue_scripts', 'include_styles');

function include_js_files()
{
    wp_enqueue_script(
        'idm250-js',
        get_template_directory_uri() . '/dist/scripts/main.js',
        [],
        false,
        true
    );
}
// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_js_files');

function register_theme_navigation()
{
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        'footer_menu' => 'Footer Menu',
    ]);
}

add_action('after_setup_theme', 'register_theme_navigation');