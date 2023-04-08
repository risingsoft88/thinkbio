<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageAboutComponents',
        'title' => 'Page About Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageAboutComponents',
                'label' => __('Page About Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\AboutHeroSection\getACFLayout(),
                    Components\AboutInfoSection\getACFLayout(),
                    Components\TeamSection\getACFLayout(),
                    Components\CtaSection\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/page-about.php'
                ]
            ]
        ]
    ]);
});
