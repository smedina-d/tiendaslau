<?php

namespace App\Classes;

use App\Models\Carts;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class RecentSales
{
    public function recentSale()
    {
        $ordersCompleted = Order::where('order_status', 1)->get();


        $venta = [];
        if ($ordersCompleted){
            foreach ($ordersCompleted as $key =>$order) {
                $item = OrderItems::where('order_id',$order->orders_id)->first();
                $product = Product::where('id',$item->product_id)->with('imagenes')->first();
                    $venta[$key]['name'] = $product->name;
                $venta[$key]['price'] = $product->price;
                foreach ($product->imagenes as $imagen) {
                    $venta[$key]['thumb1'] = $imagen->thumb1;
                }
            }
        }

        return $venta ?? [];
    }
}
