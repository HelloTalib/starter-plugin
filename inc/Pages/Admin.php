<?php
/**
 * @package Starter-plugin
 */

namespace Inc\Pages;

class Admin
{
    public function register()
    {
        add_action('admin_menu', [$this, 'add_admin_pages']);
    }
    public function add_admin_pages()
    {
        add_menu_page('oop-plugin-title', 'oop-plugin-menu-title', 'manage_options', 'oop_slug', [$this, 'admin_index'], 'dashicons-store', 110);
    }
    public function admin_index()
    {
        //require template
        require_once PLUGIN_PATH . 'templates/admin.php';
    }
}
