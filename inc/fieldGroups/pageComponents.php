<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => 'Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'post'
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-home.php'
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-about.php'
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-science.php'
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-careers.php'
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-contact.php'
                ],
                [
                    'param' => 'page_template',
                    'operator' => '!=',
                    'value' => 'page-templates/page-news.php'
                ],
            ]
        ]
    ]);
});

if (function_exists('acf_add_local_field_group')) :
    acf_add_local_field_group(array(
        'key' => 'group_611d2ea053f60',
        'title' => 'Page Settings',
        'fields' => array(
            array(
                'key' => 'field_611d2eaf9d2aa',
                'label' => 'Header White',
                'name' => 'header_white',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
endif;
