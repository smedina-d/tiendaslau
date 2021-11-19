<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use Uuids;

    protected $table = 'images';
    protected $fillable = [
        'product_id',
        'image',
        'image2',
        'image3',
        'thumb1',
        'thumb2',
        'thumb3',
        'location'
    ];
}
