<?php namespace SureSoftware\WebAlert;

use Backend;
use System\Classes\PluginBase;

/**
 * WebAlert Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'WebAlert',
            'description' => 'Site wide website alert with time out alert features',
            'author'      => 'SureSoftware',
            'icon'        => 'icon-exclamation-triangle'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'SureSoftware\WebAlert\Components\Alert' => 'alert',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'suresoftware.webalert.manage' => [
                'tab' => 'WebAlert',
                'label' => 'Manage Web Alerts'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'webalert' => [
                'label'       => 'WebAlert',
                'url'         => Backend::url('suresoftware/webalert/alert'),
                'icon'        => 'icon-exclamation-triangle',
                'permissions' => ['suresoftware.webalert.*'],
                'order'       => 500,
            ],
        ];
    }
}
