<?php

namespace Flynt\Components\HomeContentSection;

add_filter('Flynt/addComponentData?name=HomeContentSection', function ($data) {
    $data['content_1'] = apply_filters('the_content', $data['content_1']);
    $data['content_2'] = apply_filters('the_content', $data['content_2']);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'homeContentSection',
        'label' => 'Home Content Section',
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
                'label' => 'Content 1',
                'name' => 'content_1',
                'type' => 'textarea',
                'rows' => 2,
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
