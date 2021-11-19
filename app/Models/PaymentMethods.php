<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethods extends Model
{
    use Uuids;

    protected $table = 'payment_methods';

    protected $fillable = [
        'method',
        'estatus'
    ];
}
