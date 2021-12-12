<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart(Request $request)
    {

        return view('cart');
    }

    public function saveCart(Request $request)
    {
        $cart = Carts::create([
            'session_id' => $request->input('session_id'),
            'is_user' => $request->input('is_user'),
            'user_id' => $request->input('user_id'),
            'product_id' => $request->input('product_id'),
            'unit_price'    => $request->input('unit_price'),
            'quantity'      => $request->input('quantity'),
            'prod_total' => $request->input('prod_total'),
            'is_abandoned'  => 0
        ]);
        return Response()->json($cart,202);
    }

    public function removeItem($id) {
        $cart = Carts::where('id',$id)->delete();
        return back();
    }

    public function apiTyniCart($session) {
        $session_id = Session::getId();
        $cart = Carts::where('session_id',$session_id)->get();
        $final = [];
        if($cart) {
            foreach ($cart as $key => $agregados){
                $prod = Product::where('id',$agregados->product_id)->with('imagenes')->first();
                $carrito[$key]['name'] = $prod->name;
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

        return Response()->json($carrito,202);
    }
}
