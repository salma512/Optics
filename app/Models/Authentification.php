<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authentification extends Model
{
    use HasFactory;
    Public function authorization()
    {
        return $this->hasMany(Authorization::class);
    }
    Public function staffSystems()
    {
        return $this->hasMany(StaffSystems::class);
    }
    public function agencies()
    {
        return $this->belongsTo(Agencies::class);
    }
}
