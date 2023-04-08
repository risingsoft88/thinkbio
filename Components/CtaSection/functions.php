<?php

namespace Flynt\Components\CtaSection;

function getACFLayout()
{
    return [
        'name' => 'ctaSection',
        'label' => 'Cta Section',
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
                'label' => 'Link 1',
                'name' => 'link1',
                'type' => 'link',
                'return_format' => 'array',
            ],
            [
                'label' => 'Link 2',
                'name' => 'link2',
                'type' => 'link',
                'return_format' => 'array',
            ]
        ]
    ];
}
