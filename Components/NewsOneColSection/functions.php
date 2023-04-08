<?php

namespace Flynt\Components\NewsOneColSection;

use Timber\Timber;

function getACFLayout()
{
    return [
        'name' => 'newsOneColSection',
        'label' => 'News One Col Section',
        'sub_fields' => [
            // [
            //     'label' => 'Link',
            //     'name' => 'link',
            //     'type' => 'link',
            //     'return_format' => 'array',
            // ]
        ]
    ];
}

add_filter('Flynt/addComponentData?name=NewsOneColSection', function ($data) {
    $args = [
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 3,
        'post_status' => 'publish',
    ];
    
    $data['news'] = Timber::get_posts($args);
    
    return $data;
});
