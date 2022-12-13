<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proimage extends Model
{
    use HasFactory;

    protected $table = 'proimages';

    Public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
