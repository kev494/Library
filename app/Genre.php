<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['genre'];

    public function book()
    {
        return $this->belongsToMany(Book::class, 'genres_books');
    }

}
