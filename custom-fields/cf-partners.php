<?php

declare (strict_types = 1);


// Adds custom field for Partners
if( function_exists('acf_add_local_field_group') ):

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
