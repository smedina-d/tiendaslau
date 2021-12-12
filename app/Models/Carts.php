<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory, Uuids;

    protected $table = 'carts';
    protected $fillable = [
        'session_id',
        'is_user',
        'user_id',
        'product_id',
        'unit_price',
        'quantity',
        'prod_total',
        'is_abandoned'
    ];

    public function misproductos() {
        return $this->hasMany(Product::class,'id','product_id');
    }
}
