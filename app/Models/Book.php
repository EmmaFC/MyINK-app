<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'book_id');;
    }

  
}

