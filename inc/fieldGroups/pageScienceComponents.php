<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageScienceComponents',
        'title' => 'Page Science Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageScienceComponents',
                'label' => __('Page Science Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\ScienceHeroSection\getACFLayout(),
                    Components\ChallengeSection\getACFLayout(),
                    Components\GreenSection\getACFLayout(),
                    Components\ScienceInfoSection\getACFLayout(),
                    Components\ScienceImageSection\getACFLayout(),
                    Components\TargetSection\getACFLayout(),
                    Components\CtaSection\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/page-science.php'
                ]
            ]
        ]
    ]);
});
