<?php

namespace Flynt\Components\AboutHeroSection;

add_filter('Flynt/addComponentData?name=AboutHeroSection', function ($data) {
    $data['content'] = apply_filters('the_content', $data['content']);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'aboutHeroSection',
        'label' => 'About Hero Section',
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
                'label' => 'Content',
                'name' => 'content',
                'type' => 'textarea',
                'rows' => 2,
            ]
        ]
    ];
}
