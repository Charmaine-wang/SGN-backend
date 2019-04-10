<?php

declare (strict_types = 1);

if( function_exists('acf_add_local_field_group') ):

// Adds custom fields to Projects
acf_add_local_field_group([
    'key' => 'group_5cae29a787f89',
    'title' => 'Projects-field',
    'fields' => [
        [
            'key' => 'field_5cae29bcd3d33',
            'label' => 'Add Project',
            'name' => 'add_project',
            'type' => 'group',
            'instructions' => 'Here you can add description and photo.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_5cae29e9d3d34',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                    'instructions' => 'Add description of your project here',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ],
                [
                    'key' => 'field_5cae2a07d3d35',
                    'label' => 'image',
                    'name' => 'image',
                    'type' => 'image',
                    'instructions' => 'Add image',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'return_format' => 'array',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ],
                [
                    'key' => 'field_5cae2a25d3d36',
                    'label' => 'Link to page',
                    'name' => 'link_to_page',
                    'type' => 'url',
                    'instructions' => 'Link to page goes here?',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'default_value' => '',
                    'placeholder' => '',
                ],
            ],
        ],
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'projects',
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
