<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    use HasFactory;
    Public function products()
    {
        return $this->hasMany(Products::class);
    }
    public function agencies()
    {
        return $this->belongsTo(Agencies::class);
    }

}
