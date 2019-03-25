<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Books.
	 */
    
    $labels = array(
        'name'                  => _x( 'Books', 'Post type general name', 'pratchett-2019' ),
        'singular_name'         => _x( 'Book', 'Post type singular name', 'pratchett-2019' ),
        'menu_name'             => _x( 'Books', 'Admin Menu text', 'pratchett-2019' ),
        'name_admin_bar'        => _x( 'Book', 'Add New on Toolbar', 'pratchett-2019' ),
        'add_new'               => __( 'Add New', 'pratchett-2019' ),
        'add_new_item'          => __( 'Add New Book', 'pratchett-2019' ),
        'new_item'              => __( 'New Book', 'pratchett-2019' ),
        'edit_item'             => __( 'Edit Book', 'pratchett-2019' ),
        'view_item'             => __( 'View Book', 'pratchett-2019' ),
        'all_items'             => __( 'All Books', 'pratchett-2019' ),
        'search_items'          => __( 'Search Books', 'pratchett-2019' ),
        'parent_item_colon'     => __( 'Parent Books:', 'pratchett-2019' ),
        'not_found'             => __( 'No books found.', 'pratchett-2019' ),
        'not_found_in_trash'    => __( 'No books found in Trash.', 'pratchett-2019' ),
        'featured_image'        => _x( 'Book Cover Image', 'pratchett-2019' ),
        'set_featured_image'    => _x( 'Set cover image', 'pratchett-2019' ),
        'remove_featured_image' => _x( 'Remove cover image', 'pratchett-2019' ),
        'use_featured_image'    => _x( 'Use as cover image', 'pratchett-2019' ),
        'archives'              => _x( 'Book archives', 'pratchett-2019' ),
        'insert_into_item'      => _x( 'Insert into book', 'pratchett-2019' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this book', 'pratchett-2019' ),
        'filter_items_list'     => _x( 'Filter books list', 'pratchett-2019' ),
        'items_list_navigation' => _x( 'Books list navigation', 'pratchett-2019' ),
        'items_list'            => _x( 'Books list', 'pratchett-2019' ),
    );

	$args = array(
		"label" => __( "Books", "pratchett-2019" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "books", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-book-alt",
		"supports" => array( "title", "thumbnail" ),
        "taxonomies" => array("book_generator")
	);

	register_post_type( "books", $args );
    
    

	/**
	 * Post Type: Book Series.
	 */
    
    $labels = array(
        'name'                  => _x( 'Book Series', 'Post type general name', 'pratchett-2019' ),
        'singular_name'         => _x( 'Book Series', 'Post type singular name', 'pratchett-2019' ),
        'menu_name'             => _x( 'Book Series', 'Admin Menu text', 'pratchett-2019' ),
        'name_admin_bar'        => _x( 'Book Series', 'Add New on Toolbar', 'pratchett-2019' ),
        'add_new'               => __( 'Add New', 'pratchett-2019' ),
        'add_new_item'          => __( 'Add New Book Series', 'pratchett-2019' ),
        'new_item'              => __( 'New Book Series', 'pratchett-2019' ),
        'edit_item'             => __( 'Edit Book Series', 'pratchett-2019' ),
        'view_item'             => __( 'View Book Series', 'pratchett-2019' ),
        'all_items'             => __( 'All Book Series', 'pratchett-2019' ),
        'search_items'          => __( 'Search Book Series', 'pratchett-2019' ),
        'parent_item_colon'     => __( 'Parent Book Series:', 'pratchett-2019' ),
        'not_found'             => __( 'No book series found.', 'pratchett-2019' ),
        'not_found_in_trash'    => __( 'No book series found in Trash.', 'pratchett-2019' ),
        'featured_image'        => _x( 'Book Series Cover Image', 'pratchett-2019' ),
        'set_featured_image'    => _x( 'Set cover image', 'pratchett-2019' ),
        'remove_featured_image' => _x( 'Remove cover image', 'pratchett-2019' ),
        'use_featured_image'    => _x( 'Use as cover image', 'pratchett-2019' ),
        'archives'              => _x( 'Book Series archives', 'pratchett-2019' ),
        'insert_into_item'      => _x( 'Insert into book series', 'pratchett-2019' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this book series', 'pratchett-2019' ),
        'filter_items_list'     => _x( 'Filter book series list', 'pratchett-2019' ),
        'items_list_navigation' => _x( 'Book series list navigation', 'pratchett-2019' ),
        'items_list'            => _x( 'Book series list', 'pratchett-2019' ),
    );

	$args = array(
		"label" => __( "Book Series", "pratchett-2019" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "book-series", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-networking",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "book_series", $args );

	/**
	 * Post Type: Characters.
	 */
    
    $labels = array(
        'name'                  => _x( 'Characters', 'Post type general name', 'pratchett-2019' ),
        'singular_name'         => _x( 'Character', 'Post type singular name', 'pratchett-2019' ),
        'menu_name'             => _x( 'Characters', 'Admin Menu text', 'pratchett-2019' ),
        'name_admin_bar'        => _x( 'Character', 'Add New on Toolbar', 'pratchett-2019' ),
        'add_new'               => __( 'Add New', 'pratchett-2019' ),
        'add_new_item'          => __( 'Add New Character', 'pratchett-2019' ),
        'new_item'              => __( 'New Character', 'pratchett-2019' ),
        'edit_item'             => __( 'Edit Character', 'pratchett-2019' ),
        'view_item'             => __( 'View Character', 'pratchett-2019' ),
        'all_items'             => __( 'All Characters', 'pratchett-2019' ),
        'search_items'          => __( 'Search Characters', 'pratchett-2019' ),
        'parent_item_colon'     => __( 'Parent Characters:', 'pratchett-2019' ),
        'not_found'             => __( 'No characters found.', 'pratchett-2019' ),
        'not_found_in_trash'    => __( 'No characters found in Trash.', 'pratchett-2019' ),
        'featured_image'        => _x( 'Character Cover Image', 'pratchett-2019' ),
        'set_featured_image'    => _x( 'Set cover image', 'pratchett-2019' ),
        'remove_featured_image' => _x( 'Remove cover image', 'pratchett-2019' ),
        'use_featured_image'    => _x( 'Use as cover image', 'pratchett-2019' ),
        'archives'              => _x( 'Character archives', 'pratchett-2019' ),
        'insert_into_item'      => _x( 'Insert into character', 'pratchett-2019' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this character', 'pratchett-2019' ),
        'filter_items_list'     => _x( 'Filter characters list', 'pratchett-2019' ),
        'items_list_navigation' => _x( 'Characters list navigation', 'pratchett-2019' ),
        'items_list'            => _x( 'Characters list', 'pratchett-2019' ),
    );

	$args = array(
		"label" => __( "Characters", "pratchett-2019" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "characters", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-groups",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "characters", $args );

	/**
	 * Post Type: Timeline.
	 */
    
    $labels = array(
        'name'                  => _x( 'Timeline', 'Post type general name', 'pratchett-2019' ),
        'singular_name'         => _x( 'Timeline', 'Post type singular name', 'pratchett-2019' ),
        'menu_name'             => _x( 'Timeline', 'Admin Menu text', 'pratchett-2019' ),
        'name_admin_bar'        => _x( 'Timeline', 'Add New on Toolbar', 'pratchett-2019' ),
        'add_new'               => __( 'Add New', 'pratchett-2019' ),
        'add_new_item'          => __( 'Add New Timeline', 'pratchett-2019' ),
        'new_item'              => __( 'New Timeline', 'pratchett-2019' ),
        'edit_item'             => __( 'Edit Timeline', 'pratchett-2019' ),
        'view_item'             => __( 'View Timeline', 'pratchett-2019' ),
        'all_items'             => __( 'All Timeline', 'pratchett-2019' ),
        'search_items'          => __( 'Search Timeline', 'pratchett-2019' ),
        'parent_item_colon'     => __( 'Parent Timeline:', 'pratchett-2019' ),
        'not_found'             => __( 'No timeline found.', 'pratchett-2019' ),
        'not_found_in_trash'    => __( 'No timeline found in Trash.', 'pratchett-2019' ),
        'featured_image'        => _x( 'Timeline Cover Image', 'pratchett-2019' ),
        'set_featured_image'    => _x( 'Set cover image', 'pratchett-2019' ),
        'remove_featured_image' => _x( 'Remove cover image', 'pratchett-2019' ),
        'use_featured_image'    => _x( 'Use as cover image', 'pratchett-2019' ),
        'archives'              => _x( 'Timeline archives', 'pratchett-2019' ),
        'insert_into_item'      => _x( 'Insert into timeline', 'pratchett-2019' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this timeline', 'pratchett-2019' ),
        'filter_items_list'     => _x( 'Filter timeline list', 'pratchett-2019' ),
        'items_list_navigation' => _x( 'Timeline list navigation', 'pratchett-2019' ),
        'items_list'            => _x( 'Timeline list', 'pratchett-2019' ),
    );

	$args = array(
		"label" => __( "Timeline", "pratchett-2019" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "timeline", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "timeline", $args );

	/**
	 * Post Type: Reviews.
	 */
    
    $labels = array(
        'name'                  => _x( 'Reviews', 'Post type general name', 'pratchett-2019' ),
        'singular_name'         => _x( 'Review', 'Post type singular name', 'pratchett-2019' ),
        'menu_name'             => _x( 'Reviews', 'Admin Menu text', 'pratchett-2019' ),
        'name_admin_bar'        => _x( 'Review', 'Add New on Toolbar', 'pratchett-2019' ),
        'add_new'               => __( 'Add New', 'pratchett-2019' ),
        'add_new_item'          => __( 'Add New Review', 'pratchett-2019' ),
        'new_item'              => __( 'New Review', 'pratchett-2019' ),
        'edit_item'             => __( 'Edit Review', 'pratchett-2019' ),
        'view_item'             => __( 'View Review', 'pratchett-2019' ),
        'all_items'             => __( 'All Reviews', 'pratchett-2019' ),
        'search_items'          => __( 'Search Reviews', 'pratchett-2019' ),
        'parent_item_colon'     => __( 'Parent Reviews:', 'pratchett-2019' ),
        'not_found'             => __( 'No reviews found.', 'pratchett-2019' ),
        'not_found_in_trash'    => __( 'No reviews found in Trash.', 'pratchett-2019' ),
        'featured_image'        => _x( 'Review Cover Image', 'pratchett-2019' ),
        'set_featured_image'    => _x( 'Set cover image', 'pratchett-2019' ),
        'remove_featured_image' => _x( 'Remove cover image', 'pratchett-2019' ),
        'use_featured_image'    => _x( 'Use as cover image', 'pratchett-2019' ),
        'archives'              => _x( 'Review archives', 'pratchett-2019' ),
        'insert_into_item'      => _x( 'Insert into review', 'pratchett-2019' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this review', 'pratchett-2019' ),
        'filter_items_list'     => _x( 'Filter reviews list', 'pratchett-2019' ),
        'items_list_navigation' => _x( 'Reviews list navigation', 'pratchett-2019' ),
        'items_list'            => _x( 'Reviews list', 'pratchett-2019' ),
    );

	$args = array(
		"label" => __( "Reviews", "pratchett-2019" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "reviews", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => array( "title" ),
	);

	register_post_type( "reviews", $args );

	/**
	 * Post Type: Retailers.
	 */
    
    $labels = array(
        'name'                  => _x( 'Retailers', 'Post type general name', 'pratchett-2019' ),
        'singular_name'         => _x( 'Retailer', 'Post type singular name', 'pratchett-2019' ),
        'menu_name'             => _x( 'Retailers', 'Admin Menu text', 'pratchett-2019' ),
        'name_admin_bar'        => _x( 'Retailer', 'Add New on Toolbar', 'pratchett-2019' ),
        'add_new'               => __( 'Add New', 'pratchett-2019' ),
        'add_new_item'          => __( 'Add New Retailer', 'pratchett-2019' ),
        'new_item'              => __( 'New Retailer', 'pratchett-2019' ),
        'edit_item'             => __( 'Edit Retailer', 'pratchett-2019' ),
        'view_item'             => __( 'View Retailer', 'pratchett-2019' ),
        'all_items'             => __( 'All Retailers', 'pratchett-2019' ),
        'search_items'          => __( 'Search Retailers', 'pratchett-2019' ),
        'parent_item_colon'     => __( 'Parent Retailers:', 'pratchett-2019' ),
        'not_found'             => __( 'No retailers found.', 'pratchett-2019' ),
        'not_found_in_trash'    => __( 'No retailers found in Trash.', 'pratchett-2019' ),
        'featured_image'        => _x( 'Retailer Cover Image', 'pratchett-2019' ),
        'set_featured_image'    => _x( 'Set cover image', 'pratchett-2019' ),
        'remove_featured_image' => _x( 'Remove cover image', 'pratchett-2019' ),
        'use_featured_image'    => _x( 'Use as cover image', 'pratchett-2019' ),
        'archives'              => _x( 'Retailer archives', 'pratchett-2019' ),
        'insert_into_item'      => _x( 'Insert into retailer', 'pratchett-2019' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this retailer', 'pratchett-2019' ),
        'filter_items_list'     => _x( 'Filter retailers list', 'pratchett-2019' ),
        'items_list_navigation' => _x( 'Retailers list navigation', 'pratchett-2019' ),
        'items_list'            => _x( 'Retailers list', 'pratchett-2019' ),
    );

	$args = array(
		"label" => __( "Retailers", "pratchett-2019" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_icon" => "dashicons-store",
		"supports" => array( "title" ),
	);

	register_post_type( "retailers", $args );

	/**
	 * Post Type: Book Formats.
	 */
    
    $labels = array(
        'name'                  => _x( 'Book Formats', 'Post type general name', 'pratchett-2019' ),
        'singular_name'         => _x( 'Book Format', 'Post type singular name', 'pratchett-2019' ),
        'menu_name'             => _x( 'Book Formats', 'Admin Menu text', 'pratchett-2019' ),
        'name_admin_bar'        => _x( 'Book Format', 'Add New on Toolbar', 'pratchett-2019' ),
        'add_new'               => __( 'Add New', 'pratchett-2019' ),
        'add_new_item'          => __( 'Add New Book Format', 'pratchett-2019' ),
        'new_item'              => __( 'New Book Format', 'pratchett-2019' ),
        'edit_item'             => __( 'Edit Book Format', 'pratchett-2019' ),
        'view_item'             => __( 'View Book Format', 'pratchett-2019' ),
        'all_items'             => __( 'All Book Formats', 'pratchett-2019' ),
        'search_items'          => __( 'Search Book Formats', 'pratchett-2019' ),
        'parent_item_colon'     => __( 'Parent Book Formats:', 'pratchett-2019' ),
        'not_found'             => __( 'No book formats found.', 'pratchett-2019' ),
        'not_found_in_trash'    => __( 'No book formats found in Trash.', 'pratchett-2019' ),
        'featured_image'        => _x( 'Book Format Cover Image', 'pratchett-2019' ),
        'set_featured_image'    => _x( 'Set cover image', 'pratchett-2019' ),
        'remove_featured_image' => _x( 'Remove cover image', 'pratchett-2019' ),
        'use_featured_image'    => _x( 'Use as cover image', 'pratchett-2019' ),
        'archives'              => _x( 'Book Format archives', 'pratchett-2019' ),
        'insert_into_item'      => _x( 'Insert into book format', 'pratchett-2019' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this book format', 'pratchett-2019' ),
        'filter_items_list'     => _x( 'Filter book formats list', 'pratchett-2019' ),
        'items_list_navigation' => _x( 'Book Formats list navigation', 'pratchett-2019' ),
        'items_list'            => _x( 'Book Formats list', 'pratchett-2019' ),
    );

	$args = array(
		"label" => __( "Book Formats", "pratchett-2019" ),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => false,
		"query_var" => true,
		"menu_icon" => "dashicons-index-card",
		"supports" => array( "title" ),
	);

	register_post_type( "book_formats", $args );
    
    /**
	 * Post Type: Testimonials.
	 */
    
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'pratchett-2019' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'pratchett-2019' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'pratchett-2019' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'pratchett-2019' ),
        'add_new'               => __( 'Add New', 'pratchett-2019' ),
        'add_new_item'          => __( 'Add New Testimonial', 'pratchett-2019' ),
        'new_item'              => __( 'New Testimonial', 'pratchett-2019' ),
        'edit_item'             => __( 'Edit Testimonial', 'pratchett-2019' ),
        'view_item'             => __( 'View Testimonial', 'pratchett-2019' ),
        'all_items'             => __( 'All Testimonials', 'pratchett-2019' ),
        'search_items'          => __( 'Search Testimonials', 'pratchett-2019' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'pratchett-2019' ),
        'not_found'             => __( 'No testimonials found.', 'pratchett-2019' ),
        'not_found_in_trash'    => __( 'No testimonials found in Trash.', 'pratchett-2019' ),
        'featured_image'        => _x( 'Testimonial Cover Image', 'pratchett-2019' ),
        'set_featured_image'    => _x( 'Set cover image', 'pratchett-2019' ),
        'remove_featured_image' => _x( 'Remove cover image', 'pratchett-2019' ),
        'use_featured_image'    => _x( 'Use as cover image', 'pratchett-2019' ),
        'archives'              => _x( 'Testimonial archives', 'pratchett-2019' ),
        'insert_into_item'      => _x( 'Insert into testimonial', 'pratchett-2019' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this testimonial', 'pratchett-2019' ),
        'filter_items_list'     => _x( 'Filter testimonials list', 'pratchett-2019' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'pratchett-2019' ),
        'items_list'            => _x( 'Testimonials list', 'pratchett-2019' ),
    );

	$args = array(
		"label" => __( "Testimonials", "pratchett-2019" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonials", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-testimonial",
		"supports" => array( "title" ),
	);

	register_post_type( "testimonials", $args );
    

	/**
	 * Post Type: Quotes.
	 */

	$labels = array(
		"name" => __( "Quotes", "custom-post-type-ui" ),
		"singular_name" => __( "Quote", "custom-post-type-ui" ),
		"all_items" => __( "All Quotes", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Quote", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Quote", "custom-post-type-ui" ),
		"new_item" => __( "New Quote", "custom-post-type-ui" ),
		"view_item" => __( "View Quote", "custom-post-type-ui" ),
		"view_items" => __( "View Quotes", "custom-post-type-ui" ),
		"search_items" => __( "Search Quote", "custom-post-type-ui" ),
		"not_found" => __( "No Quotes found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Quotes found in the bin", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Quote", "custom-post-type-ui" ),
		"archives" => __( "Quote archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert in quote", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter quote list", "custom-post-type-ui" ),
		"items_list" => __( "Quotes list", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Quote", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Quotes", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "quotes", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-quote",
		"supports" => array( "title" ),
		"taxonomies" => array( "quote_generator" ),
	);

	register_post_type( "quotes", $args );
    
}

add_action( 'init', 'cptui_register_my_cpts' );

