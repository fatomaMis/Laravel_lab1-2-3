<?php
namespace App;
use  App\User; 

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use Authenticatable;
class Post extends Model
{
    use Sluggable;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];

    public function user()
    {
        //User::class == 'App\User'
        return $this->belongsTo('App\User');
    }

    

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
}