<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('activities', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Activities'),
            'edit_item' => __('Edit Activities'),
            'name' => __('Activities'),
            'search_items' => __('Search Activities'),
            'singular_name' => __('Activitie'),
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
