<?php
/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since 1.0.0
 * @package Myusefulplugin
 * @subpackage Myusefulplugin/includes
 * @author AuthorName <AuthorEmail@email.com>
 */
class MyusefulpluginI18n
{
    /**
     * Load the plugin text domain for translation.
     *
     * @since 1.0.0
     */
    public function loadPluginTextdomain()
    {
        load_plugin_textdomain(
            'myusefulplugin',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );
    }
}
