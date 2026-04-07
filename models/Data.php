<?php namespace Pensoft\Networks\Models;

use Model;
use October\Rain\Database\Traits\Sortable;

/**
 * Model
 */
class Data extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use Sortable;

    protected $casts = [
        'deleted_at' => 'datetime',
    ];


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
        'about_image' => \System\Models\File::class,
        'about_image2' => \System\Models\File::class,
        'icon' => \System\Models\File::class,
    ];

    public $attachMany = [
        'files' => \System\Models\File::class,
        'framework_images' => \System\Models\File::class,
        'socian_media_images' => \System\Models\File::class,
    ];

    public $belongsTo = [
        'news_category' => [\Pensoft\Articles\Models\Category::class, 'key' => 'news_category_id']
    ];

    public $belongsToMany = [
        'event' => [
            \Pensoft\Calendar\Models\Entry::class,
            'table' => 'pensoft_networks_events_pivot',
            'key' => 'network_id',
            'otherKey' => 'event_id',
            'order' => 'start desc'
        ],
        'partner' => [
            \Pensoft\Partners\Models\Partners::class,
            'table' => 'pensoft_networks_partners_pivot',
            'key' => 'network_id',
            'otherKey' => 'partner_id',
            'order' => 'instituion desc'
        ],
    ];
}