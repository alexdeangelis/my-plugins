<?php

// This hides the following menu items:
// - Posts
// - Comments

add_action('admin_menu', 'remove_options');
 
function remove_options() {
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
}