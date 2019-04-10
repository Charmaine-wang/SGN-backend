<?php

declare (strict_types = 1);

if( function_exists('acf_add_local_field_group') ):

// Adds custom fields for contact information
acf_add_local_field_group([
    'key' => 'group_5cae0754aa375',
    'title' => 'Contact Information',
    'fields' => [
        [
            'key' => 'field_5cae0757b9c77',
            'label' => 'Email',
            'name' => 'email',
            'type' => 'email',
            'instructions' => 'Insert email here',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
        ],
        [
            'key' => 'field_5cae07dbb9c78',
            'label' => 'Phone-number',
            'name' => 'phone-number',
            'type' => 'number',
            'instructions' => 'Insert phone number here',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => [
                'width' => '',
                'class' => '',
                'id' => '',
            ],
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => '',
        ],
    ],
    'location' => [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'contacts',
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
