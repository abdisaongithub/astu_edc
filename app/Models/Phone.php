<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'startup_id',
        'phone'
    ];

    public function startup()
    {
        return $this->belongsTo('App/Models/Startup');
    }
}
