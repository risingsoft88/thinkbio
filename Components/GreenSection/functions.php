<?php

namespace Flynt\Components\GreenSection;

add_filter('Flynt/addComponentData?name=GreenSection', function ($data) {
    $data['content'] = apply_filters('the_content', $data['content']);

    return $data;
});

function getACFLayout()
{
    return [
        'name' => 'greenSection',
        'label' => 'GreenSection',
        'sub_fields' => [
            [
                'label' => 'Content',
                'name' => 'content',
                'type' => 'textarea',
                'rows' => 4,
            ],
        ]
    ];
}
