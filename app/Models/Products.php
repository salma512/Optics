<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    Public function categories()
    {
        return $this->hasMany(Categories::class);
    }

    Public function brands()
    {
        return $this->hasMany(Brands::class);
    }

    Public function orderDetails()
    {
        return $this->belongsTo(OrderDetails::class);
    }

    Public function stocks()
    {
        return $this->belongsTo(Stocks::class);
    }
}
