<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    //Public function users(){return $this->belongsTo(Users::class);}

    public function permissions()
    {
        return $this->belongsToMany(Permissions::class);
    }

}

