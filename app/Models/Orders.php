<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'date',
        'status',
        'amount',
      ];
    Public function customers()
    {
        return $this->hasMany(Customers::class);
    }

    Public function orderDetails()
    {
        return $this->belongsTo(OrderDetails::class);
    }

    Public function payements()
    {
        return $this->belongsTo(Payements::class);
    }

}
