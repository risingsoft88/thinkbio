<?php

namespace Flynt\Components\ChallengeSection;

function getACFLayout()
{
    return [
        'name' => 'challengeSection',
        'label' => 'Challenge Section',
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'default_value' => '',
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
                'label' => 'Title 4',
                'name' => 'title_4',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Info 4',
                'name' => 'info_4',
                'type' => 'textarea',
                'rows' => 2,
            ],
        ]
    ];
}
