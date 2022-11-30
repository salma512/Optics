<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencies extends Model
{
    use HasFactory;
    Public function staffs()
    {
        return $this->belongsTo(Staffs::class);
    }

    Public function payementMethods()
    {
        return $this->belongsTo(PayementMethods::class);
    }

    Public function products()
    {
        return $this->belongsTo(Products::class);
    }

    public function stocks()
    {
        return $this->hasOne(Stocks::class);
    }
    public function authentification()
    {
        return $this->hasOne(Authentification::class);
    }

}
