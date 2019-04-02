<?php

declare (strict_types = 1);

add_action('init', function () {
    register_post_type('footers', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Footer'),
            'edit_item' => __('Edit Footer'),
            'name' => __('Footer'),
            'search_items' => __('Search Footers'),
            'singular_name' => __('Footer'),
        ],
        'supports' => [
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-admin-links',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true
    ]);
});


