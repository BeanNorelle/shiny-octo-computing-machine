<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{


    protected $fillable = [
        'name',
        'class',
        'level',
        'image_url'
    ];

    use HasFactory;
}
