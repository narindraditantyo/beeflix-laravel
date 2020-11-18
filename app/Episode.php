<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = 'episodes';
    protected $primaryKey = 'id';

    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
