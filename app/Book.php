<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'genre',
        'authors',
        'writers',
        'edition',
        'publisher',
        'isbn',
        'photo',
        'price',
        'created_at',
        'updated_at',
    ];
}
