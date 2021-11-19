<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use Uuids;

    protected $table = 'brands';

    protected $fillable = [
        'name',
        'image',
        'estatus'
    ];
}
