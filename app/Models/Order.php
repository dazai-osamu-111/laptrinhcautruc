<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    // use HasFactory;
    protected $fillable = [
        'id', 'orderId', 'productId', 'product_status', 'status', 'userId', 'created_at', 'update_at', 'shiptime_start_at',
         'completed_at', 'paytime', 'order_time', 'DistrictID', 'ProvinceID', 'WardCode', 'ship_price', 'ship_price'
    ];
}
