<?php

namespace Base;

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 */
class BasePublic
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
     * Register the stylesheets for the public-facing side of the site.
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
            plugin_dir_url(__FILE__) . 'dist/public.css',
            array(),
            $this->base->getVersion(),
            'all'
        );
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
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
            plugin_dir_url(__FILE__) . 'dist/public.js',
            array( 'jquery' ),
            $this->base->getVersion(),
            false
        );
    }
}
