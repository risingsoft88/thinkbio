<?php

namespace Flynt\Components\JoinUsSection;

function getACFLayout()
{
    return [
        'name' => 'joinUsSection',
        'label' => 'Join Us Section',
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Content',
                'name' => 'content',
                'type' => 'textarea',
                'rows' => 2,
            ],
            [
                'label' => 'Gravity Form Shortcode',
                'name' => 'gravity_form_shortcode',
                'type' => 'text',
                'default_value' => '',
            ],
        ]
    ];
}
