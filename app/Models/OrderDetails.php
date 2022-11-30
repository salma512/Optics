<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    Public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    Public function products()
    {
        return $this->hasMany(Products::class);
    }
}
