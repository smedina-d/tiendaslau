<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use Uuids;

    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'orders_id',
        'amount',
        'taxes',
        'shipping_fee',
        'subtotal',
        'total',
        'order_status' //0: Order Placed - 1: Order Payed - 2: Order Process - 3: Order Shipped - 4: Order Completed
    ];

}
