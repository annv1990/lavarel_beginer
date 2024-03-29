<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // mass assignment
    protected $fillable = [
        'title',
        'content'
    ];

    protected function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
