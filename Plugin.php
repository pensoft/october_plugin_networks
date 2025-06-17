<?php namespace Pensoft\Networks;

use Backend;
use System\Classes\PluginBase;

/**
 * Networks Plugin Information File
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
            'name'        => 'Networks',
            'description' => 'No description provided yet...',
            'author'      => 'Pensoft',
            'icon'        => 'icon-empire'
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
     * @return void
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
        return []; // Remove this line to activate

        return [
            'Pensoft\Networks\Components\MyComponent' => 'myComponent',
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
            'pensoft.networks.permission' => [
                'tab' => 'Networks',
                'label' => 'Edit networks permission'
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'networks' => [
                'label'       => 'Networks',
                'url'         => Backend::url('pensoft/networks/networks'),
                'icon'        => 'icon-empire',
                'permissions' => ['pensoft.networks.*'],
                'order'       => 500,
            ],
        ];
    }
}
