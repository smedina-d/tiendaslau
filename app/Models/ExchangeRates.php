<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRates extends Model
{
    use Uuids;

    protected $table = "exchange_rates";
    protected $fillable = [
        'base',
        'currency',
        'exchange',
        'last_eval',
        'exch_status'
    ];
}
