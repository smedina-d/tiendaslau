<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use Uuids;
    protected $table = 'order_items';
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity'
    ];
}
