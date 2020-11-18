<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    protected $primaryKey = 'id';

    public function episodes() {
        return $this->hasMany(Episode::class, 'movie_id', 'id');
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }
}
