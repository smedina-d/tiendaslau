<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderSeq extends Model
{
    use HasFactory,Uuids;

    protected $table = 'order_seqs';
    protected  $fillable = ['last_order_number'];
}
