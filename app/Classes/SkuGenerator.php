<?php

namespace App\Classes;

use App\Models\Order;
use App\Models\OrderSeq;
use App\Models\Sku;
use Carbon\Carbon;

class SkuGenerator
{
    public function getSku(){
        $lastSku = Sku::first();
        $sku = "TL-".Carbon::now()->year.'-'.str_pad($lastSku->last_sku+1, 2, "0", STR_PAD_LEFT);
        Sku::where('id',1)->update(['last_sku' => $lastSku->last_sku+1]);
        return $sku;
    }

    public function getLastOrder() {
        $lastOrder = OrderSeq::first();
        $orderSeq = "TL-".Carbon::now()->year.'-'.str_pad($lastOrder->last_order_number+1, 5, "0", STR_PAD_LEFT);
        OrderSeq::where('id',1)->update(['last_order_number' => $lastOrder->last_order_number+1]);
        return $orderSeq;
    }
}
