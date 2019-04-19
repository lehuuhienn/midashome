<?php

add_action( 'init', 'create_post_types' );

if ( !function_exists('create_post_types')) {
	function create_post_types() {

		register_post_type( 'house',
				array(
					'labels'        => array(
					'name'          => __('Công Trình', 'themecustom'),
					'singular_name' => __('Công Trình', 'themecustom'),
					'add_new'       => __('Thêm Công Trình', 'themecustom'),
					'all_items'     => __('DS Công Trình', 'themecustom'),
					'edit_item'     => __('Chỉnh sửa Công Trình', 'themecustom'),
					'update_item'   => __('Cập nhật Công Trình', 'themecustom'),
					'add_new_item'  => __('Thêm mới Công Trình', 'themecustom'),
					'new_item_name' => __('Tên Công Trình mới', 'themecustom'),
					'menu_name'     => __('Công Trình', 'themecustom'),
				),
				'public'                   => true,
				'hierarchical'             => true,
				'menu_position'            => 6,
				'menu_icon'                => 'dashicons-building',
				'has_archive'              => false,
				'publicly_queryable'       => true,
				'query_var'                => true,
				'exclude_from_search'      => true,
				'rewrite'                  => array( 'slug' => __('cong-trinh', 'themecustom'), 'with_front' => false),
				'supports'                 => array( 'title', 'excerpt', 'page-attributes', 'thumbnail', "editor" ),
			)
		);

		register_taxonomy('house_cat', array('house'), array(
			'labels' => array(
				'name'              => _x('Danh mục', 'themecustom' ),
				'singular_name'     => _x('Danh mục', 'themecustom' ),
				'search_items'      => __('Tìm kiếm danh mục', 'themecustom'),
				'all_items'         => __('Tất cả danh mục', 'themecustom'),
				'parent_item'       => __('Danh mục cha', 'themecustom'),
				'parent_item_colon' => __('Danh mục cha:', 'themecustom'),
				'edit_item'         => __('Chỉnh sửa danh mục', 'themecustom'),
				'update_item'       => __('Cập nhật danh mục', 'themecustom'),
				'add_new_item'      => __('Thêm mới danh mục', 'themecustom'),
				'new_item_name'     => __('Tên danh mục mới', 'themecustom'),
				'menu_name'         => __('Danh mục', 'themecustom'),
			),
			'hierarchical' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => __('danh-muc', 'themecustom'), 'with_front' => false),
		));

		register_taxonomy('house_tag', array('house'), array(
			'labels' => array(
				'name'              => _x('Tags Công Trình', 'themecustom' ),
				'singular_name'     => _x('Tags Công Trình', 'themecustom' ),
				'search_items'      => __('Tìm kiếm Tags Công Trình', 'themecustom'),
				'all_items'         => __('Tất cả Tags Công Trình', 'themecustom'),
				'parent_item'       => __('Tags Công Trình cha', 'themecustom'),
				'parent_item_colon' => __('Tags Công Trình cha:', 'themecustom'),
				'edit_item'         => __('Chỉnh sửa Tags Công Trình', 'themecustom'),
				'update_item'       => __('Cập nhật Tags Công Trình', 'themecustom'),
				'add_new_item'      => __('Thêm mới Tags Công Trình', 'themecustom'),
				'new_item_name'     => __('Tên Tags Công Trình mới', 'themecustom'),
				'menu_name'         => __('Tags Công Trình', 'themecustom'),
			),
			'hierarchical' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => __('tag-nha', 'themecustom'), 'with_front' => false ),
		));

		flush_rewrite_rules( false );
	}	
}

// NEWS

/**
 * Change POST to NEWS label
 */
function change_post_menu_label() {
    global $menu;
	global $submenu;
	$menu[5][0] = __('Tin tức', 'themecustom');
    $menu[5][6] = 'dashicons-format-aside'; 
    $submenu['edit.php'][5][0] = __('Tất cả tin tức', 'themecustom');
    $submenu['edit.php'][10][0] = __('Thêm mới', 'themecustom');
    $submenu['edit.php'][15][0] = __('Danh mục', 'themecustom');
    $submenu['edit.php'][16][0] = __('Các tag', 'themecustom');
}
function change_post_object_label() {
	global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
	$labels->name = __('Tin tức', 'themecustom');
	$labels->singular_name = __('Tin tức', 'themecustom');
	$labels->add_new = __('Thêm tin tức mới', 'themecustom');
	$labels->add_new_item = __('Thêm tin tức mới', 'themecustom');
	$labels->edit_item = __('Chỉnh sửa tin tức', 'themecustom');
	$labels->new_item = __('Tin tức', 'themecustom');
	$labels->view_item = __('Xem tin', 'themecustom');
	$labels->search_items = __('Tìm Tin tức', 'themecustom');
	$labels->not_found = __('Không tìm thấy tin tức', 'themecustom');
	$labels->not_found_in_trash = __('Không có Tin tức trong thùng rác', 'themecustom');
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

