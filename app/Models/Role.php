<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    
    protected $fillable = [

        'name',
        'guard_name',
        
    ];

    public function role()
    {
        return $this->hasMany(User::class, 'role_id', 'user_id');
    }
    
}
