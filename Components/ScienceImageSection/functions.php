<?php

namespace Flynt\Components\ScienceImageSection;

function getACFLayout()
{
    return [
        'name' => 'scienceImageSection',
        'label' => 'Science Image Section',
        'sub_fields' => [
            [
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => '',
                'max_size' => 4,
            ],
        ]
    ];
}
