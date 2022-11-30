<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffSystems extends Model
{
    use HasFactory;
    Public function authentification()
    {
        return $this->belongsTo(Authentification::class);
    }
}
