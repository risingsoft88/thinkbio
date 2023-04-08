<?php

// use ACFComposer\ACFComposer;
// use Flynt\Components;

// add_action('Flynt/afterRegisterComponents', function () {
//     ACFComposer::registerFieldGroup([
//         'name' => 'postComponents',
//         'title' => 'Post Components',
//         'style' => 'seamless',
//         'fields' => [
//             [
//                 'name' => 'postComponents',
//                 'label' => __('Post Components', 'flynt'),
//                 'type' => 'flexible_content',
//                 'button_label' => __('Add Component', 'flynt'),
//                 'layouts' => [
//                 ],
//             ],
//         ],
//         'location' => [
//             [
//                 [
//                     'param' => 'post_type',
//                     'operator' => '==',
//                     'value' => 'post',
//                 ],
//             ],
//         ],
//     ]);
// });

if (function_exists('acf_add_local_field_group')) :
    acf_add_local_field_group(array(
        'key' => 'group_611f28159d3a3',
        'title' => 'Post Metabox',
        'fields' => array(
            array(
                'key' => 'field_611f281bbccc5',
                'label' => 'Logo (Retina 2x)',
                'name' => 'logo',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_613b2e71e2ebf',
                'label' => 'Date',
                'name' => 'date',
                'type' => 'date_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'F j, Y',
                'return_format' => 'F j, Y',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_612e3468c5177',
                'label' => 'External Link',
                'name' => 'external_link',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
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
