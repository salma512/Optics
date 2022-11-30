<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayementMethods extends Model
{
    use HasFactory;
    Public function payements()
    {
        return $this->belongsTo(Payements::class);
    }
}
