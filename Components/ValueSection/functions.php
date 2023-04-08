<?php

namespace Flynt\Components\ValueSection;

function getACFLayout()
{
    return [
        'name' => 'valueSection',
        'label' => 'Value Section',
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Image 1',
                'name' => 'image_1',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => '',
                'max_size' => 4,
            ],
            [
                'label' => 'Title 1',
                'name' => 'title_1',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Info 1',
                'name' => 'info_1',
                'type' => 'textarea',
                'rows' => 2,
            ],
            [
                'label' => 'Image 2',
                'name' => 'image_2',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => '',
                'max_size' => 4,
            ],
            [
                'label' => 'Title 2',
                'name' => 'title_2',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Info 2',
                'name' => 'info_2',
                'type' => 'textarea',
                'rows' => 2,
            ],
            [
                'label' => 'Image 3',
                'name' => 'image_3',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => '',
                'max_size' => 4,
            ],
            [
                'label' => 'Title 3',
                'name' => 'title_3',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Info 3',
                'name' => 'info_3',
                'type' => 'textarea',
                'rows' => 2,
            ],
            [
                'label' => 'Footer Info',
                'name' => 'footer_info',
                'type' => 'textarea',
                'rows' => 2,
            ],
        ]
    ];
}
