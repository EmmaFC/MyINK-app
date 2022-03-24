<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    
    protected $fillable = [

        'title',
        'author',
        'year',
        'genre',
        'cover',
        'pages',
        'description',
        'collection',
        'publishing_house',
        'edition',
        
    ];
}
