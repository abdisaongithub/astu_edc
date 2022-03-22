<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = [
        'name',
        'title',
        'occupation',
        'rank',
        'image',
    ];
}
