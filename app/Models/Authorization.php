<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    use HasFactory;
    Public function authentification()
    {
        return $this->belongsTo(Authorization::class);
    }

}
