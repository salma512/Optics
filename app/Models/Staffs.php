<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    use HasFactory;
    Public function user()
    {
        return $this->belongsTo(User::class);
    }
    Public function agencies()
    {
        return $this->hasMany(Agencies::class);
    }
}
