<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    use Uuids;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'estatus'
    ];
}
