<?php
/**
 * @package Starter-plugin
 */

namespace Inc\Base;

class SettingsLinks
{
    protected $plugin;
    public function __construct()
    {
        $this->plugin = PLUGIN;
    }

    public function register()
    {
        add_filter("plugin_action_links_$this->plugin", [$this, 'settings_link']);
    }
    public function settings_link($links)
    {
        $settings_link = '<a href="options-general.php?page=oop_slug">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}
