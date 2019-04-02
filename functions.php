<?php

declare (strict_types = 1);

// Register plugin helpers.
require template_path('includes/plugins/plate.php');

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Disable the admin toolbar.
    show_admin_bar(false);

    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 theme support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);

    // Register navigation menus.
    register_nav_menus([
        'navigation' => __('Navigation', 'wordplate'),
    ]);
});

// Register custom post types.
require get_template_directory() . '/post-types/activities.php';
require get_template_directory() . '/post-types/projects.php';
require get_template_directory() . '/post-types/partners.php';
require get_template_directory() . '/post-types/branches.php';
require get_template_directory() . '/post-types/footer.php';

// Adds custom field for Partners post type
if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        'key' => 'group_5ca319457bdf2',
        'title' => 'Add Partner',
        'fields' => [
            [
                'key' => 'field_5ca3198201d40',
                'label' => 'Add Partner',
                'name' => 'link',
                'type' => 'url',
                'instructions' => 'Here you can insert a url to your partners and a feautered image.',
                'required' => 0,
                'conditional_logic' => 0,
                'default_value' => '',
                'placeholder' => 'https://website.com',
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'partners',
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ]);
endif;

// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');

    // wp_enqueue_style('wordplate', mix('styles/app.css'));

    // wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
    // wp_enqueue_script('wordplate');
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);