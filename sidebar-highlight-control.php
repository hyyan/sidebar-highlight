<?php

/*
 * This file is part of the hyyan/sidebar-highlight  package.
 * (c) Hyyan Abo Fakher <tiribthea4hyyan@gmail.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Class to set the sidebar highlight options from customizer
 * 
 * @author Hyyan
 */
class Hyyan_Sidebar_Highlight_Controll {

    /**
     * Constrcut the controller
     */
    public function __construct() {
        add_action('customize_register', array($this, 'build'));
    }

    /**
     * Build Control
     * 
     * @param WP_Customize_Manager $manager
     */
    public function build(WP_Customize_Manager $manager) {

        // section
        $manager->add_section('hyyan_sidebar_highlight_section', array(
            'title' => __('Sidebar Hightlight', HYYAN_SLIDER_HIGHLIGHT_DOMAIN),
        ));

        // enable , disable checkbox
        $manager->add_setting('hyyan_sidebar_highlight_on', array(
            'default'    => true
        ));
        $manager->add_control('hyyan_sidebar_highlight_on', array(
            'type' => 'checkbox'
            , 'label' => __('Enable.', HYYAN_SLIDER_HIGHLIGHT_DOMAIN)
            , 'description' => __('Disable sidebar highlight to get real preview', HYYAN_SLIDER_HIGHLIGHT_DOMAIN)
            , 'section' => 'hyyan_sidebar_highlight_section'
        ));
    }

}

/**
 * Check if the sidebar hightlight is enabled
 * 
 * @return boolean true if enabled , flase othewise
 */
function hyyan_is_sidebar_highlight() {
    return get_theme_mod('hyyan_sidebar_highlight_on',true);
}
