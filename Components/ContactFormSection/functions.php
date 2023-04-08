<?php

namespace Flynt\Components\ContactFormSection;

function getACFLayout()
{
    return [
        'name' => 'contactFormSection',
        'label' => 'Contact Form Section',
        'sub_fields' => [
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
