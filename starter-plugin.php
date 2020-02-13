<?php
/**
 * @package Starter-plugin
/*
Plugin Name: Starter Plugin
Plugin URI: https://talib.netlify.com
Description: This is my First Object-Orient-Programing plugin
Version: 1.0.0
Author: TALIB
Author URI: https://talib.netlify.com
License: GPLv2 or later
Text Domain: starter-plugin
 */
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2020 Automattic, Inc.
 */

// Define Constant
defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human!');
define('PUBLIC_DIR', plugin_dir_url(__FILE__) . 'assets/public');
define('ADMIN_DIR', plugin_dir_url(__FILE__) . 'assets/admin');
define('VERSION', time());
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));

// Require once the Composer Autoload
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}

// The code runs during plugin activation
function activate_oop_plugin()
{
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_oop_plugin');

// The code runs during plugin deactivation
function deactivate_oop_plugin()
{
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_oop_plugin');
