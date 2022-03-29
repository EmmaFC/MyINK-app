<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLink extends Model
{
    use HasFactory;
    protected $table = 'contact_links';
    
    protected $fillable = [

        'name',
        'description', 
        'image',
        'url',

    ];
}