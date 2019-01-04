<?php

namespace Base;

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 */
class Base
{

    /**
     * The loader that's responsible for maintaining and registering all hooks that power
     * the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      _base_Loader    $loader    Maintains and registers all hooks for the plugin.
     */
    protected $loader;

    /**
     * The unique identifier of this plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $plugin_name    The string used to uniquely identify this plugin.
     */
    protected $pluginName;

    /**
     * The current version of the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $version    The current version of the plugin.
     */
    protected $version;

    /**
     * Define the core functionality of the plugin.
     *
     * Set the plugin name and the plugin version that can be used throughout the plugin.
     * Load the dependencies, define the locale, and set the hooks for the admin area and
     * the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function __construct(
        string $pluginName,
        string $pluginVersion,
        Loader $loader,
        Internationalization $intl
    ) {
        $this->pluginName = $pluginName;
        $this->pluginVersion = $pluginVersion;
        $this->loader = $loader;
        $this->intl = $intl;
    }

    /**
     * Run the loader to execute all of the hooks with WordPress.
     *
     * @since    1.0.0
     */
    public function run()
    {
        $this->setLocale();
        $this->defineAdminHooks();
        $this->definePublicHooks();

        $this->loader->run();
    }

    /**
     * The name of the plugin used to uniquely identify it within the context of
     * WordPress and to define internationalization functionality.
     *
     * @since     1.0.0
     * @return    string    The name of the plugin.
     */
    public function getPluginName()
    {
        return $this->pluginName;
    }

    /**
     * Retrieve the version number of the plugin.
     *
     * @since     1.0.0
     * @return    string    The version number of the plugin.
     */
    public function getPluginVersion()
    {
        return $this->pluginVersion;
    }

    /**
     * The reference to the class that orchestrates the hooks with the plugin.
     *
     * @since     1.0.0
     * @return    _base_Loader    Orchestrates the hooks of the plugin.
     */
    public function getLoader()
    {
        return $this->loader;
    }

    /**
     * Define the locale for this plugin for internationalization.
     *
     * Uses the _base_i18n class in order to set the domain and to register the hook
     * with WordPress.
     *
     * @since    1.0.0
     * @access   private
     */
    private function setLocale()
    {
        $this->loader->addAction(
            'plugins_loaded',
            $this->intl,
            'loadPluginTextDomain'
        );
    }

    /**
     * Register all of the hooks related to the admin area functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function defineAdminHooks()
    {
        $admin = new Admin($this);

        $this->loader->addAction(
            'admin_enqueue_scripts',
            $admin,
            'enqueueStyles'
        );

        $this->loader->addAction(
            'admin_enqueue_scripts',
            $admin,
            'enqueueScripts'
        );

        $this->loader->addAction(
            'admin_menu',
            $admin,
            'addMenu'
        );
    }

    /**
     * Register all of the hooks related to the public-facing functionality
     * of the plugin.
     *
     * @since    1.0.0
     * @access   private
     */
    private function definePublicHooks()
    {
        $basePublic = new BasePublic($this);

        $this->loader->addAction(
            'wp_enqueue_scripts',
            $basePublic,
            'enqueueStyles'
        );

        $this->loader->addAction(
            'wp_enqueue_scripts',
            $basePublic,
            'enqueueScripts'
        );
    }
}
