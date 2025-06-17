<?php namespace Pensoft\Networks\Models;

use Model;

/**
 * Model
 */
class Data extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pensoft_networks_data';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $jsonable = [
        'knowege_requests'
    ];

    public $attachOne = [
        'about_image' => 'System\Models\File',
        'icon' => 'System\Models\File',
    ];

    public $attachMany = [
        'files' => 'System\Models\File',
    ];

    public $belongsTo = [
        'news_category' => ['Pensoft\Articles\Models\Category', 'key' => 'news_category_id']
    ];

    public $belongsToMany = [
        'event' => [
            'Pensoft\Calendar\Models\Entry',
            'table' => 'pensoft_networks_events_pivot',
            'key' => 'network_id',
            'otherKey' => 'event_id',
            'order' => 'title desc'
        ],
    ];
}
