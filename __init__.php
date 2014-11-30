<?php

/*
 * This file is part of the hyyan/sidebar-highlight package.
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Plugin Name: Hyyan Sidebar Highlight
 * Description: Small Wordpress plugin to hightlight all sidebars when wordpress customize mode is enabled 
 * Author: Hyyan Abo Fakher
 * Author URI: https://github.com/hyyan
 * Version: 0.1
 * GitHub Plugin URI: hyyan/sidebar-highlight
 * License: MIT License
 */

if (!defined('ABSPATH'))
    exit('restricted access');

/** text domain */
define('HYYAN_SLIDER_HIGHLIGHT_DOMAIN', 'hyyan-sidebar-highlight');

require_once __DIR__ . '/sidebar-highlight-control.php';
require_once __DIR__ . '/sidebar-highlight.php';


/** support translation */
add_action('plugins_loaded', function() {
    load_plugin_textdomain(
            HYYAN_SLIDER_HIGHLIGHT_DOMAIN
            , false
            , trailingslashit(basename(dirname(__FILE__))) . 'languages/'
    );
});

new Hyyan_Sidebar_Highlight_Controll();
new Hyyan_Sidebar_Highlight();
