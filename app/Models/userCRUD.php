<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userCRUD extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        // Add other columns as needed
    ];
    
}

   
