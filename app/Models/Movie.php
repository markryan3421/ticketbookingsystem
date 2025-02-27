<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'movie_slug',
        'duration',
        'price',    
        'release_date',
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'movie_user', 'movie_id', 'user_id');
    }
}
