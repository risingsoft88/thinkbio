<?php

namespace Flynt\Components\Cta2Section;

function getACFLayout()
{
    return [
        'name' => 'cta2Section',
        'label' => 'Cta2 Section',
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
                'label' => 'Link',
                'name' => 'link',
                'type' => 'link',
                'return_format' => 'array',
            ]
        ]
    ];
}
