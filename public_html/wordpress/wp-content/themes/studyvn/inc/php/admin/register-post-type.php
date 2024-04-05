<?php
//JLPT TEST
register_post_type(
    'jlpt-test',
    array(
        'labels' => array(
            'view_item' => '表示',
            'view_items' => '表示',
            'name' => __('JLPT TEST'),
            'singular_name' => __('JLPT TEST'),
            'add_new' => __('新規追加'),
            'add_new_item' => __('新規追加'),
            'all_items' => __('一覧'),
            'edit_item' => __('編集'),
            'featured_image' => _x('画像', 'post'),
        ),
        'label' => 'JLPT TEST',
        'public' => true,
        'hierarchical'  => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'supports' => ['title', 'editor'],
        'menu_icon' => 'dashicons-welcome-widgets-menus'
    )
);

register_taxonomy(
    'jlpt-test_cate',
    'jlpt-test',
    array(
        'labels'                    => array(
            'add_new_item'    => __('カテゴリー追加する', 'category'),
            'edit_item'       => __('編集', 'category'),
            'search_items'    => __('検索', 'category'),
            'update_item'     => __('更新', 'category'),
            'view_item'       => null,
        ),
        'show_admin_column' => true,
        'hierarchical'              => true,
        'update_count_callback'     => '_update_post_term_count',
        'label'                     => 'カテゴリー',
        'singular_label'            => 'カテゴリー',
        'public'                    => true,
        'show_ui'                   => true,
        'show_in_rest'              => true,
    )
);
