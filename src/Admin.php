<?php

namespace Base;

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 */
class Admin
{

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     */
    public function __construct(Base $base)
    {
        $this->base = $base;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueueStyles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in _base_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The _base_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style(
            $this->base->getPluginName(),
            plugin_dir_url(dirname(__FILE__)) . 'dist/admin.css',
            array(),
            $this->base->getPluginVersion(),
            'all'
        );
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueueScripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in _base_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The _base_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script(
            $this->base->getPluginName(),
            plugin_dir_url(dirname(__FILE__)) . 'dist/admin.js',
            array( 'jquery' ),
            $this->base->getPluginVersion(),
            false
        );
    }

    public function addMenu()
    {
        add_menu_page(
            'Base',
            'Base <span class="update-plugins count-123"><span class="plugin-count">123</span></span>',
            'manage_options',
            'base/home.php',
            [$this, 'menuPage'],
            'dashicons-admin-home',
            80
        );
    }

    public function menuPage()
    {
        require_once __DIR__ . '/../resources/views/admin/home.php';
    }
}
