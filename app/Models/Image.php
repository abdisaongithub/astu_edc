<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function startup()
    {
        return $this->belongsTo('App/Models/Startup');
    }
}