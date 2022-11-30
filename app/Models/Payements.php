<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payements extends Model
{
    use HasFactory;
    Public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    Public function payementMethods()
    {
        return $this->hasMany(PayementMethods::class);
    }
}
