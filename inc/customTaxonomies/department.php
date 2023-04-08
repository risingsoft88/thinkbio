<?php

namespace Flynt\CustomTaxonomies;

function registerDepartmentTaxonomy()
{
    $labels = [
        'name'                       => _x('Departments', 'Department General Name', 'flynt'),
        'singular_name'              => _x('Department', 'Department Singular Name', 'flynt'),
        'menu_name'                  => __('Department', 'flynt'),
        'all_items'                  => __('All Items', 'flynt'),
        'parent_item'                => __('Parent Item', 'flynt'),
        'parent_item_colon'          => __('Parent Item:', 'flynt'),
        'new_item_name'              => __('New Item Name', 'flynt'),
        'add_new_item'               => __('Add New Item', 'flynt'),
        'edit_item'                  => __('Edit Item', 'flynt'),
        'update_item'                => __('Update Item', 'flynt'),
        'view_item'                  => __('View Item', 'flynt'),
        'separate_items_with_commas' => __('Separate items with commas', 'flynt'),
        'add_or_remove_items'        => __('Add or remove items', 'flynt'),
        'choose_from_most_used'      => __('Choose from the most used', 'flynt'),
        'popular_items'              => __('Popular Items', 'flynt'),
        'search_items'               => __('Search Items', 'flynt'),
        'not_found'                  => __('Not Found', 'flynt'),
        'no_terms'                   => __('No items', 'flynt'),
        'items_list'                 => __('Items list', 'flynt'),
        'items_list_navigation'      => __('Items list navigation', 'flynt'),
    ];
    $args = [
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    ];

    register_taxonomy('department', ['team'], $args);
}

add_action('init', 'Flynt\\CustomTaxonomies\\registerDepartmentTaxonomy');

function set_custom_edit_department_columns($columns)
{
    $columns['display_order'] = 'Display Order';
	return $columns;
}

add_filter('manage_edit-department_columns', '\\Flynt\\CustomTaxonomies\\set_custom_edit_department_columns');

function custom_department_column($value, $column, $tax_id)
{
    if ($column == 'display_order') {
        echo get_field('display_order', 'department_' . $tax_id);
    }
}

add_action('manage_department_custom_column', '\\Flynt\\CustomTaxonomies\\custom_department_column', 10, 3);

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_633d83e94d091',
        'title' => 'Role Taxonomy Metabox',
        'fields' => array(
            array(
                'key' => 'field_633d83fd7e80c',
                'label' => 'Display Order',
                'name' => 'display_order',
                'type' => 'number',
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
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'department',
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