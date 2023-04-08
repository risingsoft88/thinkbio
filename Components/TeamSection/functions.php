<?php

namespace Flynt\Components\TeamSection;

use Timber\Timber;
use Timber\Post;

function getACFLayout()
{
    return [
        'name' => 'teamSection',
        'label' => 'Team Section',
        'sub_fields' => [
            [
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'default_value' => '',
            ],
            [
                'label' => 'Team List',
                'name' => 'team_list',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Team',
                'sub_fields' => [
                    [
                        'label' => 'Team',
                        'name' => 'team',
                        'type' => 'post_object',
                        'post_type' => [
                            0 => 'team',
                        ],
                        'return_format' => 'object',
                        'ui' => 1,
                    ],
                ]
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
            ],
            [
                'label' => 'Advisor List',
                'name' => 'advisor_list',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Advisor',
                'sub_fields' => [
                    [
                        'label' => 'Team',
                        'name' => 'team',
                        'type' => 'post_object',
                        'post_type' => [
                            0 => 'team',
                        ],
                        'return_format' => 'object',
                        'ui' => 1,
                    ],
                ]
            ],
        ]
    ];
}

add_filter('Flynt/addComponentData?name=TeamSection', function ($data) {
    $data['get_single_team_nonce'] = wp_create_nonce('get_single_team_nonce');

    $departments = Timber::get_terms([
        'taxonomy' => 'department',
        'hide_empty' => false,
    ]);

    $data['departments'] = [];

    foreach($departments as $item){
        $data['departments'][get_field('display_order', 'department_' . $item->id)] = [
            'id' => $item->id,
            'title' => $item->title,
        ];
    }

    ksort($data['departments']);

    return $data;
});

add_action('wp_ajax_get_single_team', 'Flynt\Components\TeamSection\getSingleTeamFunc');
add_action('wp_ajax_nopriv_get_single_team', 'Flynt\Components\TeamSection\getSingleTeamFunc');

function getSingleTeamFunc()
{
    if (!wp_verify_nonce($_REQUEST['nonce'], 'get_single_team_nonce')) {
        exit('No naughty business please');
    }

    $result = [];
    $postId = intval($_REQUEST['postId']);
    
    $team = new Post($postId);

    $result['single_team_html'] = Timber::compile('Partials/team-popup.twig', ['post' => $team]);

    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        $result = json_encode($result);
        echo $result;
    } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    die();
}
