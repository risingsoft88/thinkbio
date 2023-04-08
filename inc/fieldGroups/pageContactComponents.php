<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageContactComponents',
        'title' => 'Page Contact Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageContactComponents',
                'label' => __('Page Contact Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\ImageTitleHeroSection\getACFLayout(),
                    Components\ContactFormSection\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/page-contact.php'
                ]
            ]
        ]
    ]);
});
