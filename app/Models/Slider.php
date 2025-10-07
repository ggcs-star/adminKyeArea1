<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Support\Str;

class Slider extends Model
{
    protected $connection = 'mongodb';    
     protected $collection = 'sliders';

    protected $fillable = [
        'title',
        'caption',
        'image_path', 
        'order',
        'is_active',
    ];

  
    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'int',
    ];
}
