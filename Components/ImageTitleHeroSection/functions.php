<?php

namespace Flynt\Components\ImageTitleHeroSection;

function getACFLayout()
{
    return [
        'name' => 'imageTitleHeroSection',
        'label' => 'Image Title Hero Section',
        'sub_fields' => [
            [
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'preview_size' => 'medium',
                'instructions' => '',
                'max_size' => 4,
                'mime_types' => 'gif,jpg,jpeg,png'
            ],
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Black Title',
                'name' => 'black_title',
                'type' => 'true_false'
            ]
        ]
    ];
}
