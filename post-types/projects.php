<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('projects', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Projects'),
            'edit_item' => __('Edit Projects'),
            'name' => __('Projects'),
            'search_items' => __('Search Projects'),
            'singular_name' => __('Project'),
        ],
                'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20,
        'public' => true,
    ]);
});
