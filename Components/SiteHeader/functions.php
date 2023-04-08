<?php

namespace Flynt\Components\SiteHeader;

use Timber\Menu;
use Flynt\Utils\Options;

add_action('init', function () {
    register_nav_menus([
        'header_menu' => __('Header Menu', 'flynt')
    ]);
});

add_filter('Flynt/addComponentData?name=SiteHeader', function ($data) {
    $data['header_right_link'] = Options::getGlobal('Header Settings', 'header_right_link');
    $data['header_menu'] = new Menu('header_menu');

    return $data;
});
