<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function startup()
    {
        return $this->belongsTo('App/Models/Startup');
    }
}
