<?php namespace MitchellJamieson\Blog\Models;

use Model;

/**
 * Model
 */
class Submission extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $fillable = ['studio', 'email', 'video_url', 'music', 'comments', 'equipment'];

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
    public $table = 'mitchelljamieson_blog_submissions';

    public static function fromRequest($request)
    {
        return self::create([
            'studio' => $request->studio,
            'email' => $request->email,
            'video_url' => $request->video_url,
            'music' => $request->music,
            'equipment' => $request->equipment,
            'comments' => $request->comments,
        ]);
    }
}