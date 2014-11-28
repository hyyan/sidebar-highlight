<?php

/*
 * This file is part of the hyyan/sidebar-highlight  package.
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . '/sidebar-highlight-events.php';

/**
 * Class to highlight all sidebars on theme
 * 
 * @author Hyyan
 */
class Hyyan_Sidebar_Highlight {

    /**
     * Constrcut the plugin
     */
    public function __construct() {
        add_filter('is_active_sidebar', array($this, 'activateSidebars'));
        add_action('dynamic_sidebar_before', array($this, 'before'));
        add_action('dynamic_sidebar_after', array($this, 'after'));
        add_action('customize_preview_init', array($this, 'assets'));
    }

    /**
     * Before sidebar action
     * 
     * @see Hyyan_Sidebar_Highlight_Events::WRAPPER_CLASSESS
     * 
     * @global object $wp_registered_sidebars
     * @param string $id
     * 
     * @return boolean false if not preview mode
     */
    public function before($id) {

        if (false === static::isPreview())
            return false;

        /**
         * @see Hyyan_Sidebar_Highlight_Events::WRAPPER_CLASSESS
         */
        $classes = apply_filters(
                Hyyan_Sidebar_Highlight_Events::WRAPPER_CLASSESS
                , array()
        );

        global $wp_registered_sidebars;
        if (empty($wp_registered_sidebars) || !isset($wp_registered_sidebars[$id]))
            return false;

        printf('<div class="%s"><div class="hyyan-sidebar-highlight-name">%s</div>'
                , 'hyyan-sidebar-highlight ' . implode(' ', $classes)
                , $wp_registered_sidebars[$id]['name']
        );
    }

    /**
     * After sidebar action
     */
    public function after() {
        if (static::isPreview())
            echo '</div>';
    }

    /**
     * Registe the plugin assets
     */
    public function assets() {
        $uri = plugin_dir_url(__FILE__);
        wp_enqueue_style('hyyan-sidebar-highlight-css'
                , $uri . '/public/style.css'
        );
    }

    /**
     * Activate all sidebars even empty ones in preview mode
     * 
     * @param boolean $isAcitve
     * 
     * @return boolean true if preview mode , default value if not
     */
    public function activateSidebars($isAcitve) {
        if (static::isPreview())
            return true;
        return $isAcitve;
    }

    /**
     * Check if we are in preview mode
     * 
     * @global WP_Customize_Manager $wp_customize
     * @return boolean true if preview mode , false otherwise
     */
    public static function isPreview() {
        global $wp_customize;
        return ( isset($wp_customize) && $wp_customize->is_preview() );
    }

}
