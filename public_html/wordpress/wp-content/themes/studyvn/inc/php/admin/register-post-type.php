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
        'menu_icon' => 'dashicons-editor-spellcheck'
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

register_post_type(
    'blog',
    array(
        'labels' => array(
            'view_item' => '表示',
            'view_items' => '表示',
            'name' => __('BLOG'),
            'singular_name' => __('BLOG'),
            'add_new' => __('新規追加'),
            'add_new_item' => __('新規追加'),
            'all_items' => __('一覧'),
            'edit_item' => __('編集'),
            'featured_image' => _x('画像', 'post'),
            'set_featured_image'    => __('画像を設定する', '3288-visualive-example'),
            'remove_featured_image' => __('画像を削除する', '3288-visualive-example'),
        ),
        'label' => 'BLOG',
        'public' => true,
        'hierarchical'  => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'menu_icon' => 'dashicons-share'
    )
);

register_taxonomy(
    'blog_cate',
    'blog',
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
register_taxonomy(
    'blog_tag',
    'blog',
    array(
        'labels'                    => array(
            'edit_item'       => __('キーワード編集する', 'blog_tag'),
            'add_new_item'    => __('キーワード追加する', 'blog_tag'),
            'search_items'    => __('検索', 'blog_tag'),
            'update_item'     => __('更新', 'blog_tag'),
            'view_item'       => null,
            'new_item_name'   => __('キーワード名', 'blog_tag'),
            'parent_item'     => __('親キーワード', 'blog_tag')
        ),
        'hierarchical' => true,
        'update_count_callback' => '_update_post_term_count',
        'label' => 'キーワード',
        'public' => true,
        'show_ui' => true,
        'show_in_rest' => true,
    )
);
