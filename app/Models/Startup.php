<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    protected $fillable = [
        'name',
        'description',
        'detail',
        'category',
        'slogan',
        'email',
        'website',
        'location'
    ];

    public function images()
    {
        return $this->hasMany('App/Models/Image');
    }

    public function phones()
    {
        return $this->hasMany('App/Models/Phone');
    }
}
