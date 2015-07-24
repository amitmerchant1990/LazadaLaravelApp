<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    /**
     * The tags that belong to the post.
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
