<?php

namespace Flynt\Components\CareerHeroSection;

add_filter('Flynt/addComponentData?name=CareerHeroSection', function ($data) {
    $data['content_1'] = apply_filters('the_content', $data['content_1']);
    $data['content_2'] = apply_filters('the_content', $data['content_2']);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'careerHeroSection',
        'label' => 'Career Hero Section',
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
                'label' => 'Title 1',
                'name' => 'title_1',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Content 1',
                'name' => 'content_1',
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
                'label' => 'Content 2',
                'name' => 'content_2',
                'type' => 'textarea',
                'rows' => 2,
            ]
        ]
    ];
}
