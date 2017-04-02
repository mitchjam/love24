<?php namespace MitchellJamieson\Blog\Models;

use Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use MitchellJamieson\Blog\Models\Equipment;
use Illuminate\Http\Exception\HttpResponseException;

/**
 * Model
 */
class Wedding extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = true;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mitchelljamieson_blog_weddings';

    /**
     * Relationships
     */
    public $belongsTo = [
        'author' => 'MitchellJamieson\Blog\Models\Author',
        'studio' => 'MitchellJamieson\Blog\Models\Studio',
    ];

    public $belongsToMany = [
        'equipment' => [
            'MitchellJamieson\Blog\Models\Equipment', 
            'table' => 'mitchelljamieson_blog_equipment_wedding'
        ],
        'songs' => [
            'MitchellJamieson\Blog\Models\Song', 
            'table' => 'mitchelljamieson_blog_song_wedding'
        ],
    ];

    /**
     * Scopes
     */
    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at');
    }

    /**
     * Accessors and Mutators
     */
    
    public function setPublishedAtAttribute($value)
    {
        if ($value) {
            $this->attributes['published_at'] = Carbon::now()->toDateTimeString();
        } else {
            $this->attributes['published_at'] = null;
        }
    }

    public function getPublishedAtAttribute($value)
    {
        return (bool) $value;
    }

    // Get options for the equipment checkbox list
    public function getEquipmentOptions($value, $formData)
    {
        $equipment = Equipment::orderBy('name', 'asc')->get()->reduce(function($carry, $item) {
            $carry[$item->id] = $item->name;

            return $carry;
        }, []);

        return $equipment;
    }

    // Get options for the songs checkbox list
    public function getSongsOptions($value, $formData)
    {
        $songs = Song::orderBy('name', 'asc')->get()->reduce(function($carry, $item) {
            $carry[$item->id] = $item->name;

            return $carry;
        }, []);

        return $songs;
    }
     
    /**
     * Custom Methods
     */
    
    public static function findBySlug($slug)
    {
        $wedding = self::all()->first(function($index, $wedding) use ($slug) {
            return str_slug($wedding->title) == $slug;
        }, false);

        return $wedding;
    }
}