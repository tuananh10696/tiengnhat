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
            "lazyblock/framed",
            "lazyblock/content-and-image",
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
    } elseif (in_array($post_type, ['blog'])) {
        wp_enqueue_style('blog', get_stylesheet_directory_uri() . '/inc/assets/blog-edit.css');
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


//記事のDATA習得
function getListAll($post_type = null, $limit = 10, $query = [], $get_posts = false, $status = 'publish', $orderby = 'menu_order', $sort = 'ASC', $id = '')
{
    $query = !empty($query) ? $query : ($_GET ?? []);

    $post_type = $post_type ?? get_post_type();
    $paged = isset($query['page']) && intval($query['page']) > 1 ? intval($query['page']) : 1;

    $args = [
        'post_type' => $post_type,
        'paged' => $paged,
        'posts_per_page' => $limit,
        'post_status' => $status,
        'orderby' => $orderby,
        'order' =>  $sort,
        'post__not_in'   => array($id)
    ];

    //ADMINがログインしたらどれの記事でも見れるようにする
    if (is_user_logged_in() && @$_GET['preview']) {
        $args['post_status'] = array('publish', 'draft', 'pending', 'private');
    }

    if (is_array($args['orderby'])) unset($args['order']);

    $tax_query = [];
    foreach ($query as $k => $v) {
        if (!in_array($k, ['category', 'kw']) || $v == '') continue;


        $taxonomy = $post_type . '_' . $k;
        $taxonomy = $k == 'category' ? ($post_type . '_cate') : $taxonomy;
        $taxonomy = $k == 'kw' ? ($post_type . '_tag') : $taxonomy;

        $v = (array) $v;

        $tax_query[] = [
            'taxonomy' => $taxonomy,
            'field' => 'name',
            'terms' => [$v[0]],
            'operator' => 'IN',
            'include_children' => isset($v['include_children']) ? $v['include_children'] : false
        ];
    }

    if ($tax_query) {
        if (count($tax_query) > 1) $tax_query['relation'] = 'AND';
        $args['tax_query'] = $tax_query;
    }

    //テキスト検索
    if (isset($query['kw_search']) && $query['kw_search'] != '')
        $args['s'] = $_GET['kw_search'];

    // meta query
    if (isset($query['meta_query']) && !empty($query['meta_query']))
        $args['meta_query'] = $query['meta_query'];

    if (isset($query['address_kw']) && !empty($query['address_kw'])) {

        $args['meta_query'] = array(
            array(
                'key' => 'nagasaki_address',
                'value' => $query['address_kw'],
            )
        );
    }

    if (isset($query['more']) && !empty($query['more']))
        $args = array_merge($args, $query['more']);

    if (isset($_GET['preview']) && $_GET['preview'] == 'true') {
        $args['post_status'] = 'any';

        if (isset($_GET['post___id']) && isset($_GET['post___type']) && ($_GET['post___type'] == $args['post_type']))
            $args['post__in'] = (array) $_GET['post___id'];
        else if (isset($_GET['preview_id']))
            $args['post__in'] = (array) $_GET['preview_id'];
    }
    return $get_posts ? get_posts($args) : new WP_Query($args);
}


// カテゴリーのデーターを取得する
function get_list_taxomomy($taxonomy, $parent = 0, $orderby = 'menu_order', $sort = 'DESC')
{
    return get_terms([
        'taxonomy'      => $taxonomy,
        'parent'        => $parent,
        'hide_empty'    => false,
        'orderby'       => $orderby,
        'order'         => $sort,

    ]);
}


function get_current_link()
{
    return (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}


function pagination($datas, $url)
{
    $total_pages = $datas->max_num_pages;

    if ($total_pages > 1) {
        $current_page = max(1, get_query_var('paged'));
        $pages_to_show = 3;

        // Calculate pages
        $start_page = max(1, $current_page - floor($pages_to_show / 2));
        $end_page = min($total_pages, $start_page + $pages_to_show - 1);

        $now_page = 1;
        if (@$_GET['page']) {
            $now_page = $_GET['page'];
            if (($total_pages - $_GET['page']) > 2) {
                $start_page =  $now_page > 1 ? $now_page - 1 : 1;
                $end_page = $now_page + ($now_page > 1 ? 1 : 2);
            } else {
                $start_page = $total_pages - 3;
                $end_page = $total_pages;
            }
        }

        // Multiple conditions
        $s = '';
        if (isset($_GET['kw']) || isset($_GET['category']) || isset($_GET['kw_search']) || (isset($_GET['s']) && $_GET['s'] != '')) {
            $s = '&' . preg_replace('/page=[0-9]+&/', '', $_SERVER['QUERY_STRING']);
        }

        // Display pagination
        echo '<ul class="pagination justify-content-center">';
        if ($now_page != 1) echo '<li class="page-item"><a class="page-link"  href="/' . $url . '?page=' . ($now_page - 1) . $s . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>';
        for ($i = $start_page; $i <= intval($end_page); $i++) {
            if ($i > 0) {
                $active = ($i == $now_page) ? 'active' : '';
                echo '<li class="page-item ' . $active . '"><a class="page-link" href="/' . $url . '?page=' . $i  . $s . '">' . intval($i) . '</a></li>';
            }
        }

        // If more than 3 pages
        if ($end_page < $total_pages) {
            echo '  <li class="page-item"><span class="paginationList__item dot en">...</span></li>
            <li class="page-item"><a class="page-link" href="/' . $url . '?page=' . $total_pages . $s . '">' . $total_pages . '</a></li>';
        }

        if ($now_page !=  intval($total_pages)) echo ' <li class="page-item"><a class="page-link"  href="/' . $url . '?page=' . ($now_page + 1) . $s . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
        echo '</ul>';
    }
}


function check_img($ip_name)
{
    $img = false;
    if (isset($ip_name) && $ip_name != '') {
        $img = $ip_name;
    }
    return $img;
}
