<?php

namespace Flynt\Acf;

use Flynt\Utils\Options;

add_filter('pre_http_request', function ($preempt, $args, $url) {
    if (strpos($url, 'https://www.youtube.com/oembed') !== false || strpos($url, 'https://vimeo.com/api/oembed') !== false) {
        $response = wp_cache_get($url, 'oembedCache');
        if (!empty($response)) {
            return $response;
        }
    }
    return false;
}, 10, 3);

add_filter('http_response', function ($response, $args, $url) {
    if (strpos($url, 'https://www.youtube.com/oembed') !== false || strpos($url, 'https://vimeo.com/api/oembed') !== false) {
        wp_cache_set($url, $response, 'oembedCache');
    }
    return $response;
}, 10, 3);

Options::addGlobal('Header Settings', [
    [
        'label' => 'Header Right Link',
        'name' => 'header_right_link',
        'type' => 'link',
        'return_format' => 'array',
    ]
]);

Options::addGlobal('Footer Settings', [
    [
        'name' => 'address',
        'label' => __('Address', 'flynt'),
        'type' => 'text',
    ],
    [
        'name' => 'email',
        'label' => __('Email', 'flynt'),
        'type' => 'text',
    ],
    [
        'name' => 'linkedin_url',
        'label' => __('Linkedin URL', 'flynt'),
        'type' => 'text',
    ],
]);
