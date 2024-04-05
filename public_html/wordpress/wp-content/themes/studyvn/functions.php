<?php
add_theme_support('post-thumbnails');

// 記事の種類追加
require get_parent_theme_file_path('/inc/php/admin/register-post-type.php');



//使わないブロックを非表示する
function disable_specific_blocks($allowed_block_types, $post)
{
    // Make sure allowed types is an array
    if (!is_array($allowed_block_types)) {
        $allowed_block_types = array(
            'core/block', // Required to enable "Reusable blocks" feature.
            'core/columns',
            'core/paragraph',
            'core/heading',
            'core/embed',
            'core/list',
            'core/list-item',
            'core/twitter',
            "lazyblock-core/free",
            "lazyblock/jlpt-normal-qs",
            "lazyblock/jlpt-long-qs",
            "lazyblock/jlpt-listen",
            "lazyblock/multifile",
            "lazyblock/oneimg",
            "lazyblock/imgcontentright",
            "lazyblock/schedule",
            "lazyblock/wakucontent",
            'flexible-table-block/table'
        );
    }

    return $allowed_block_types;
}
add_filter('allowed_block_types_all', 'disable_specific_blocks', 10, 2);



/**
 * Enqueue CSS for a specific post type edit screen
 */
function my_enqueue_edit_screen_css($hook)
{
    global $post_type;
    if (in_array($post_type, ['jlpt-test'])) {
        wp_enqueue_style('jlpt-test', get_stylesheet_directory_uri() . '/inc/assets/jlpt-test.css');
    }
}
add_action('admin_enqueue_scripts', 'my_enqueue_edit_screen_css');


// 編集画面のJS
// function add_custom_script_to_admin()
// {
//     global $pagenow, $post_type;

//     if (($pagenow == 'post.php' || $pagenow == 'post-new.php') && $post_type === 'jlpt-test') {
//         $script_url = get_template_directory_uri() . '/inc/js/jlpt-edit-page.js';
//         wp_enqueue_script('custom-script', $script_url, array('jquery'), null, true);

//         // JSファイルにpost_typeを渡す
//         wp_localize_script('custom-script', 'custom_script_params', array(
//             'post_type' => $post_type,
//         ));
//     }
// }
// add_action('admin_enqueue_scripts', 'add_custom_script_to_admin');
