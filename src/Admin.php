<?php

namespace Base;

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://verzola.net
 * @since      1.0.0
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 */
class Admin
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $pluginName;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($pluginName, $version)
    {
        $this->pluginName = $pluginName;
        $this->version = $version;
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

        wp_enqueue_style($this->pluginName, plugin_dir_url(__FILE__) . 'css/_base-admin.css', array(), $this->version, 'all');
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

        wp_enqueue_script($this->pluginName, plugin_dir_url(__FILE__) . 'js/_base-admin.js', array( 'jquery' ), $this->version, false);
    }

    public function addMenu()
    {
        add_menu_page(
            'Base',
            'Base <span class="update-plugins count-123"><span class="plugin-count">123</span></span>',
            'manage_options',
            'base/dashboard.php',
            [$this, 'menuPage'],
            'dashicons-visibility',
            80
        );
    }

    public function menuPage()
    {
        require_once __DIR__ . '/../views/admin/home.php';
    }
}