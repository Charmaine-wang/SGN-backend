<?php

declare (strict_types = 1);

if( function_exists('acf_add_local_field_group') ):

// Adds custom fields for Activities
acf_add_local_field_group([
    'key' => 'group_5cae0f7a0b3b9',
    'title' => 'Activities',
    'fields' => [
        [
            'key' => 'field_5cae0f8cf1058',
            'label' => 'New Activity',
            'name' => 'activities',
            'type' => 'group',
            'instructions' => 'Here we can create a new activity with photo, description and location.',
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
                    'key' => 'field_5cae0fc0f1059',
                    'label' => 'info',
                    'name' => 'info',
                    'type' => 'textarea',
                    'instructions' => 'Here we can write a description about the activity',
                    'required' => 1,
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
                    'key' => 'field_5cae1056f105a',
                    'label' => 'Group Leader',
                    'name' => 'group-leader',
                    'type' => 'user',
                    'instructions' => 'Insert user?',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'role' => '',
                    'allow_null' => 0,
                    'multiple' => 0,
                    'return_format' => 'array',
                ],
            ],
        ],
        [
            'key' => 'field_5cae1132f105b',
            'label' => 'Location',
            'name' => 'location',
            'type' => 'google_map',
            'instructions' => 'Insert location',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'center_lat' => '',
            'center_lng' => '',
            'zoom' => '',
            'height' => '',
        ],
        [
            'key' => 'field_5cae11caf105c',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'instructions' => 'Here you can upload image.',
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
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'activities',
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
