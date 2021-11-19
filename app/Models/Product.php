<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Uuids;

    protected $table = 'products';
    protected $fillable = [
        'sku',
        'name',
        'category',
        'price',
        'taxes',
        'discount',
        'minimal_description',
        'description',
        'additional_info',
        'brand',
        'stars',
        'quantity'
    ];
}
