<?php
/**
 * @package Starter-plugin
 */

namespace Inc\Base;

class Enqueue
{
    // register style & scripts files
    public function register()
    {
        add_action('wp_enqueue_scripts', [$this, 'load_public_assets']);
        add_action('admin_enqueue_scripts', [$this, 'load_admin_assets']);
    }
    // load public assets
    public function load_public_assets()
    {
        wp_enqueue_style('public-style', PUBLIC_DIR . '/css/style.css', null, VERSION);
        wp_enqueue_script('public-script', PUBLIC_DIR . '/js/main.js', ['jquery'], VERSION, true);
    }
    // load admin assets
    public function load_admin_assets()
    {
        wp_enqueue_style('admin-style', ADMIN_DIR . '/css/style.css', null, VERSION);
        wp_enqueue_script('admin-script', ADMIN_DIR . '/js/main.js', ['jquery'], VERSION, true);
    }
}
