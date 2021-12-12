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

    public function imagenes() {
        return $this->hasMany('App\Models\Imagenes','product_id','id');
    }

    public function categoria()
    {
        return $this->hasOne(Categorie::class,'id','category');
    }

    public function misproductos() {
        return $this->belongsTo(Carts::class,'product_id','id');
    }
}
