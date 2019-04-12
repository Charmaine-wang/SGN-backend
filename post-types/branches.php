<?php

declare (strict_types = 1);

add_action('init', function () {
    register_post_type('branches', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Branch'),
            'edit_item' => __('Edit Branches'),
            'name' => __('Branches'),
            'search_items' => __('Search Branches'),
            'singular_name' => __('Branch'),
        ],
        'supports' => [
            'title',
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-networking',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true
    ]);
});
