<?php

namespace Flynt\Components\AboutInfoSection;

function getACFLayout()
{
    return [
        'name' => 'aboutInfoSection',
        'label' => 'About Info Section',
        'sub_fields' => [
            [
                'label' => 'Content',
                'name' => 'content',
                'type' => 'textarea',
                'rows' => 2,
            ],
            [
                'label' => 'Info List',
                'name' => 'info_list',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Info',
                'sub_fields' => [
                    [
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => '',
                        'max_size' => 4,
                    ],
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
                        'rows' => 4,
                    ],
                ]
            ],
        ]
    ];
}
