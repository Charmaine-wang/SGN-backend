<?php

declare (strict_types = 1);

add_action('init', function () {
    register_post_type('contacts', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New Contacts'),
            'edit_item' => __('Edit Contacts'),
            'name' => __('Contacts'),
            'search_items' => __('Search Contacts'),
            'singular_name' => __('Contact'),
        ],
        'supports' => [
            'title',
            'thumbnail'
        ],
        'menu_icon' => 'dashicons-list-view',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true
    ]);
});
