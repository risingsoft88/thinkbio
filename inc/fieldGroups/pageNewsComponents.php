<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageNewsComponents',
        'title' => 'Page News Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageNewsComponents',
                'label' => __('Page News Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\ImageTitleHeroSection\getACFLayout(),
                    Components\NewsOneColSection\getACFLayout(),
                    Components\NewsTwoColSection\getACFLayout(),
                    Components\Cta2Section\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/page-news.php'
                ]
            ]
        ]
    ]);
});
