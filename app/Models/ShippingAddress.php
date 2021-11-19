<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use Uuids;

    protected $table = 'shipping_addresses';

    protected $fillable = [
        'user_id',
        'full_name',
        'country_id',
        'address_1',
        'address_2',
        'state_province_region',
        'city',
        'colony',
        'phone',
        'cp',
        'shipping_directions',
        'is_default'
    ];
}
