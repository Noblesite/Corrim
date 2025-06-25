<?php
// Enqueue Tailwind CSS and custom JS
function corrim_enqueue_assets() {
    wp_enqueue_style('corrim-style', get_template_directory_uri() . '/dist/style.css', [], null);
    wp_enqueue_script('corrim-script', get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action('wp_enqueue_scripts', 'corrim_enqueue_assets');

// Register nav menus and theme support
function corrim_theme_setup() {
    register_nav_menus([
        'primary' => __('Main Navigation', 'corrim')
    ]);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'corrim_theme_setup');

// Create default menu programmatically if it doesn't exist
function corrim_setup_menu_programmatically() {
    $menu_name = 'Main Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);

    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);

        $menu_items = [
            ['title' => 'Home',       'url' => home_url('/')],
            ['title' => 'About',      'url' => home_url('/about')],
            ['title' => 'Products',   'url' => home_url('/products')],
            ['title' => 'Our Work',   'url' => home_url('/our-work')],
            ['title' => 'Resources',  'url' => home_url('/resources')],
            ['title' => 'Find Your Local Expert',    'url' => home_url('/find-your-local-expert')],
            ['title' => 'Quote Request',    'url' => home_url('/quote-request')],
            ['title' => 'Order Form',    'url' => home_url('/order-form')],
            ['title' => 'Installations',    'url' => home_url('/installations')],
            ['title' => 'Contact',    'url' => home_url('/contact')],
        ];

        foreach ($menu_items as $item) {
            wp_update_nav_menu_item($menu_id, 0, [
                'menu-item-title' => $item['title'],
                'menu-item-url'   => $item['url'],
                'menu-item-status'=> 'publish'
            ]);
        }

        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}
add_action('after_setup_theme', 'corrim_setup_menu_programmatically');
