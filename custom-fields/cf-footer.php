<?php

declare (strict_types = 1);

// Adds custom field for Footer
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group([
    'key' => 'group_5ca3648a8f1b9',
    'title' => 'Footer',
    'fields' => [
        [
            'key' => 'field_5ca3649ec1dca',
            'label' => 'Facebook',
            'name' => 'facebook',
            'type' => 'url',
            'instructions' => 'Here we paste our Facebook url.',
            'required' => 0,
            'conditional_logic' => 0,
            'default_value' => '',
            'placeholder' => '',
        ],
        [
            'key' => 'field_5ca364c3c1dcb',
            'label' => 'Twitter',
            'name' => 'twitter',
            'type' => 'url',
            'instructions' => 'Here we paste our Twitter url.',
            'required' => 0,
            'conditional_logic' => 0,
            'default_value' => '',
            'placeholder' => '',
        ],
        [
            'key' => 'field_5ca364e3c1dcc',
            'label' => 'Instagram',
            'name' => 'instagram',
            'type' => 'url',
            'instructions' => 'Here we paste our Instagram url.',
            'required' => 0,
            'conditional_logic' => 0,
            'default_value' => '',
            'placeholder' => '',
        ],
        [
            'key' => 'field_5ca364f5c1dcd',
            'label' => 'Email',
            'name' => 'email',
            'type' => 'email',
            'instructions' => 'Here we paste our email information.',
            'required' => 0,
            'conditional_logic' => 0,
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ],
        [
            'key' => 'field_5ca3650bc1dce',
            'label' => 'Phone',
            'name' => 'phone',
            'type' => 'text',
            'instructions' => 'Here we paste our phone number.',
            'required' => 0,
            'conditional_logic' => 0,
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ],
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'footers',
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
