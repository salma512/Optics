<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
      ];
    Public function products()
    {
        return $this->belongsTo(Products::class);
    }
}
