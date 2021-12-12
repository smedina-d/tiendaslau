<?php

namespace App\Classes;

use App\Models\Carts;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class tinyCart
{

    public function myCart() {
        $session_id = Session::getId();
        $cart = Carts::where('session_id',$session_id)->get();
        $final = [];
        if($cart) {
            foreach ($cart as $key => $agregados){
                $prod = Product::where('id',$agregados->product_id)->with('imagenes')->first();
                $carrito[$key]['name'] = $prod->name;
                $carrito[$key]['sku'] = $prod->sku;
                foreach($prod->imagenes->take(1) as $imagen) {
                    $carrito[$key]['thumb'] = $imagen->thumb1;
                }
                $carrito[$key]['unit_price'] = $agregados->unit_price;
                $carrito[$key]['product_id'] = $agregados->product_id;
                $carrito[$key]['cart_id'] = $agregados->id;
                $carrito[$key]['qty'] = $agregados->quantity;
                $carrito[$key]['price'] = $agregados->prod_total;
                $final = array_push($carrito);
            }
        } else {
            $carrito = [];
        }

        return $carrito ?? [];
    }
}
