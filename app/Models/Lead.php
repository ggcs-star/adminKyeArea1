<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Lead extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'leads';
    protected $guarded = []; 
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', '_id');
    }
}
