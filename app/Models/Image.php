<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
      'startup_id',
      'image'
    ];

    public function startup()
    {
        return $this->belongsTo('App/Models/Startup');
    }
}
