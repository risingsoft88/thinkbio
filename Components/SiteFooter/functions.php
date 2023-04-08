<?php

namespace Flynt\Components\SiteFooter;

use Timber\Menu;
use Flynt\Utils\Asset;
use Flynt\Utils\Options;

add_action('init', function () {
    register_nav_menus([
        'footer_menu_1' => __('Footer Menu 1', 'flynt'),
    ]);
});

add_filter('Flynt/addComponentData?name=SiteFooter', function ($data) {
    $data['footer_menu_1'] = new Menu('footer_menu_1');

    $data['address'] = Options::getGlobal('Footer Settings', 'address');
    $data['email'] = Options::getGlobal('Footer Settings', 'email');
    $data['linkedin_url'] = Options::getGlobal('Footer Settings', 'linkedin_url');

    $data['logo'] = [
        'src' => Asset::requireUrl('Components/SiteFooter/Assets/footer-logo.svg'),
        'alt' => get_bloginfo('name')
    ];

    return $data;
});
