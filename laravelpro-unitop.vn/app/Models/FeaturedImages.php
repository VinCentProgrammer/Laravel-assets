<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedImages extends Model
{
    use HasFactory;
    function Post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
