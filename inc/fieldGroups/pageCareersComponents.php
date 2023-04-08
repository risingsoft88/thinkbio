<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageCareersComponents',
        'title' => 'Page Careers Componentss',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageCareersComponents',
                'label' => __('Page Careers Componentss', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\CareerHeroSection\getACFLayout(),
                    Components\ValueSection\getACFLayout(),
                    Components\OpeningSection\getACFLayout(),
                    Components\JoinUsSection\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/page-careers.php'
                ]
            ]
        ]
    ]);
});
