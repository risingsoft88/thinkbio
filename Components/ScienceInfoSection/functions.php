<?php

namespace Flynt\Components\ScienceInfoSection;

function getACFLayout()
{
    return [
        'name' => 'scienceInfoSection',
        'label' => 'Science Info Section',
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'default_value' => '',
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
                        'rows' => 2,
                    ],
                ]
            ],
        ]
    ];
}
