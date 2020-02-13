<?php
/**
 * @package Starter-plugin
 */


if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

//  clear databse data
$books = get_posts(['post_type' => 'book', 'numberposts' => -1]);
foreach ($books as $book) {
    wp_delete_post($book->ID, true);
}

//access the database via SQL
global $wpdb;
$wpdb->query("DELETE FROM wp_posts WHERE post_type = 'book'");

// delete metadata
$wpdb->query("DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");

// delete metadata
$wpdb->query("DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts)");
