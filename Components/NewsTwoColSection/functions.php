<?php

namespace Flynt\Components\NewsTwoColSection;

use Timber\Timber;

function getACFLayout()
{
    return [
        'name' => 'newsTwoColSection',
        'label' => 'News Two Col Section',
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

add_filter('Flynt/addComponentData?name=NewsTwoColSection', function ($data) {
    $args = [
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => -1,
        'post_status' => 'publish',
    ];
    
    $data['news'] = Timber::get_posts($args);
    
    return $data;
});
