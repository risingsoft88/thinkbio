<?php

namespace Flynt\Components\OpeningSection;

function getACFLayout()
{
    return [
        'name' => 'openingSection',
        'label' => 'Opening Section',
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
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'link',
                        'return_format' => 'array',
                    ]
                ]
            ],
        ]
    ];
}
