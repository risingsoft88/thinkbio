<?php

namespace Flynt\CustomPostTypes;

function registerTeamPostType()
{
    $labels = [
        'name'                  => _x('Team', 'Team General Name', 'flynt'),
        'singular_name'         => _x('Team', 'Team Singular Name', 'flynt'),
        'menu_name'             => __('Team', 'flynt'),
        'name_admin_bar'        => __('Team', 'flynt'),
        'archives'              => __('Item Archives', 'flynt'),
        'attributes'            => __('Item Attributes', 'flynt'),
        'parent_item_colon'     => __('Parent Item:', 'flynt'),
        'all_items'             => __('All Items', 'flynt'),
        'add_new_item'          => __('Add New Item', 'flynt'),
        'add_new'               => __('Add New', 'flynt'),
        'new_item'              => __('New Item', 'flynt'),
        'edit_item'             => __('Edit Item', 'flynt'),
        'update_item'           => __('Update Item', 'flynt'),
        'view_item'             => __('View Item', 'flynt'),
        'view_items'            => __('View Items', 'flynt'),
        'search_items'          => __('Search Item', 'flynt'),
        'not_found'             => __('Not found', 'flynt'),
        'not_found_in_trash'    => __('Not found in Trash', 'flynt'),
        'featured_image'        => __('Featured Image', 'flynt'),
        'set_featured_image'    => __('Set featured image', 'flynt'),
        'remove_featured_image' => __('Remove featured image', 'flynt'),
        'use_featured_image'    => __('Use as featured image', 'flynt'),
        'insert_into_item'      => __('Insert into item', 'flynt'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'flynt'),
        'items_list'            => __('Items list', 'flynt'),
        'items_list_navigation' => __('Items list navigation', 'flynt'),
        'filter_items_list'     => __('Filter items list', 'flynt'),
    ];
    $args = [
        'label'                 => __('Team', 'flynt'),
        'description'           => __('Team Description', 'flynt'),
        'labels'                => $labels,
        'supports'              => ['title'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => false,
        'capability_type'       => 'page',
        'menu_icon'             => 'dashicons-groups',
    ];
    register_post_type('team', $args);
}

add_action('init', '\\Flynt\\CustomPostTypes\\registerTeamPostType');

function set_custom_edit_team_columns($columns)
{
    return [
        'cb' => $columns['cb'],
        'avatar' => 'Avatar',
        'title' => $columns['title'],
        'taxonomy-department' => 'Departments',
        'role' => 'Role',
        'date' => $columns['date'],
    ];
}

add_filter('manage_team_posts_columns', '\\Flynt\\CustomPostTypes\\set_custom_edit_team_columns');

function custom_team_column($column, $post_id)
{
    if ($column == 'avatar') {
        $avatar = get_field('avatar', $post_id);
        if (!empty($avatar)) {
            echo '<img src="' . $avatar->src('full') . '" alt="' . $avatar->alt . '" style="width: 100px;"/>';
        }
    } else if ($column == 'role') {
        $role = get_field('role', $post_id);
        
        echo $role;
    }
}

add_action('manage_team_posts_custom_column', '\\Flynt\\CustomPostTypes\\custom_team_column', 10, 2);

if (function_exists('acf_add_local_field_group')) :
    acf_add_local_field_group(array(
        'key' => 'group_611dc3feed80c',
        'title' => 'Team Metabox',
        'fields' => array(
            array(
                'key' => 'field_611dc40820217',
                'label' => 'Avatar (retina 2x)',
                'name' => 'avatar',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '49%',
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
                'key' => 'field_611dc40821217',
                'label' => 'Avatar Round (retina 2x)',
                'name' => 'avatar_round',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '49%',
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
                'key' => 'field_611dc41020218',
                'label' => 'Role',
                'name' => 'role',
                'type' => 'text',
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
                'maxlength' => '',
            ),
            array(
                'key' => 'field_611fcfaa13eb9',
                'label' => 'Content',
                'name' => 'content',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'default',
                'media_upload' => 0,
                'delay' => 1,
            ),
            array(
                'key' => 'field_611fcfbe13eba',
                'label' => 'Linkedin Url',
                'name' => 'linkedin_url',
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
                    'value' => 'team',
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
