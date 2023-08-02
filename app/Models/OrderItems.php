<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    public function orderItems()
    {
        return $this->belongsTo(OrderItems::class);
    }
}
