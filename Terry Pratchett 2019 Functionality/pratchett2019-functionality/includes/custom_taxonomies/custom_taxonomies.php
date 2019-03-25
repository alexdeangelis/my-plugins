<?php

function cptui_register_my_taxes_book_generator() {

	/**
	 * Taxonomy: Book Generator.
	 */

	$labels = array(
		"name" => __( "Book Generator", "pratchett-2019" ),
		"singular_name" => __( "Book Generator", "pratchett-2019" ),
		"all_items" => __( "All Book Generator categories", "pratchett-2019" ),
		"edit_item" => __( "Edit Book Generator category", "pratchett-2019" ),
		"add_new_item" => __( "Add new Book Generator category", "pratchett-2019" ),
		"separate_items_with_commas" => __( "Separate Book Generator categories with commas", "pratchett-2019" ),
		"choose_from_most_used" => __( "Choose from the most used Book Generator categories", "pratchett-2019" ),
	);

	$args = array(
		"label" => __( "Book Generator", "pratchett-2019" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'book-generator', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "book_generator",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "book_generator", array( "books" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_book_generator' );


function cptui_register_my_taxes_quote_generator() {

	/**
	 * Taxonomy: Quote Generator.
	 */

	$labels = array(
		"name" => __( "Quote Generator", "custom-post-type-ui" ),
		"singular_name" => __( "Quote Generator", "custom-post-type-ui" ),
		"all_items" => __( "All Quote Generator categories", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Quote Generator category", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Quote Generator category", "custom-post-type-ui" ),
		"separate_items_with_commas" => __( "Separate Quote Generator categories with commas", "custom-post-type-ui" ),
		"choose_from_most_used" => __( "Choose from the most used Quote Generator categories", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Quote Generator", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'quote-generator', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "quote_generator",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		);
	register_taxonomy( "quote_generator", array( "quotes" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes_quote_generator' );