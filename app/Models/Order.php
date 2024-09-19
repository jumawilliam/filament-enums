<?php

namespace App\Models;

use App\OrderStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $casts = [
        'status' =>  OrderStatus::class,
    ];
}
