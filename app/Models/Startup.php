<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    public function images()
    {
        return $this->hasMany('App/Models/Image');
    }

    public function phones()
    {
        return $this->hasMany('App/Models/Phone');
    }
}
