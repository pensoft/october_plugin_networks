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
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'Networks',
            'description' => 'No description provided yet...',
            'author'      => 'Pensoft',
            'icon'        => 'icon-share-alt'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {

    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return [];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     */
    public function registerPermissions(): array
    {

        return [
            'pensoft.networks.permission' => [
                'tab' => 'Networks',
                'label' => 'Edit networks permission'
            ],
        ];
    }

    public function registerNavigation(): array
    {
        return [
            'networks' => [
                'label'       => 'Networks',
                'url'         => Backend::url('pensoft/networks/networks'),
                'icon'        => 'icon-share-alt',
                'permissions' => ['pensoft.networks.*'],
                'order'       => 500,
            ],
        ];
    }
}