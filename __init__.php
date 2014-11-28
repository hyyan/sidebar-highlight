<?php

/*
 * This file is part of the hyyan/sidebar-highlight package.
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * Plugin Name: Hyyan Sidebar Highlight
 * Description: A light plugin to highlight all sidebars in any theme 
 * Author: Hyyan Abo Fakher
 * Author URI: https://github.com/hyyan
 * GitHub Plugin URI: hyyan/sidebar-highlight
 * License: MIT License
 */

if (!defined('ABSPATH'))
    exit('restricted access');

require_once __DIR__.'/sidebar-highlight.php';

new Hyyan_Sidebar_Highlight();