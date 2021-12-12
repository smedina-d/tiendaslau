<?php

namespace App\Http\Controllers;

use App\Classes\SkuGenerator;
use App\Models\Carts;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe;
use Stripe\Stripe as SStripe;

class CheckoutController extends Controller
{
    use Authenticatable;
    public function checkout()
    {
        return view('checkout');
    }

    public function loginOnCheckout(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $oldSessionId = $request->old_session;
            $request->session()->regenerate();
            $newSessionId = Session::getId();

            $findCart = Carts::where('session_id', $oldSessionId)->get();

            if ($findCart) {
                foreach($findCart as $csrt) {
                    Carts::where('session_id', $oldSessionId)
                        ->update([
                            'session_id' => $newSessionId
                        ]);
                }
            }

            return redirect()->to(url('checkout',Session::getId()));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }

    public function paymentForm() {
        $subtotal = Carts::where('session_id',Session::getId())->get();
        $amount = 0;
        $skus = [];
        foreach ($subtotal as $vlor) {
            $prod = Product::where('id',$vlor->product_id)->first();
            array_push($skus,$prod->sku);
            $amount = $amount + $vlor->prod_total;
        }

        return view('stripe2')->with(['amount' => $amount,'skus' => $skus]);
    }

    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {

        SStripe::setApiKey(config('services.stripe.secret'));

        $amount = $request->input('amount_vl') + 120;

        $articulos = $request->input('compra');

        $art = [];

            foreach($articulos as $compras) {
                array_push($art,$compras);
            }



        try {

            Stripe\Charge::create([
                "amount" => $amount * 100,
                "currency" => "mxn",
                "source" => $request->stripeToken,
                "description" => "Compra de los siguientes articulos " . json_encode($art)
            ]);

        } catch (\Exception $e) {
            Session::flash('Fail',"Ocurrio un error: " . $e->getMessage());
            return back();
        }

        //find if user exist
        $verif = Auth::check();

        if ($verif) {
            $user_id = Auth::user()->id;
        } else {
            $user_id = 0;
        }

        $ordernumber = new SkuGenerator();
        $order = Order::create([
            'user_id' => $user_id,
            'guest_order' => ($user_id <> 0) ?? 1,
            'orders_id' => $ordernumber->getLastOrder(),
            'amount' => $amount,
            'taxes' => 0,
            'shipping_fee' => 120,
            'subtotal' => $request->amount -120,
            'total' => $request->amount + 120,
            'order_status' => 1
        ]);

        $myCart = Carts::where('session_id',Session::getId())->get();

        foreach ($myCart as $articles) {
            OrderItems::create([
                'order_id'  => $order->id,
                'product_id' => $articles->product_id,
                'quantity'  => $articles->quantity
            ]);
        }

        Carts::where('session_id',Session::getId())->delete();

        Session::flash('success', 'Payment successful!');

        return back();
    }

//    public function stripePost(Request $request) {
//
//// This is a sample test API key.
//        SStripe::setApiKey('sk_test_51JvYOzAgmIGXfk008uFkLg29HVA01y2vltu5At1bUZ08C0NnQ1do8fETUxMA2Tb0EiyojLicbMFHTI9KE3Up3z6I009ZPmqL4w');
//
//        header('Content-Type: application/json');
//
//        try {
//            // retrieve JSON from POST body
//            $jsonStr = file_get_contents('php://input');
//            $jsonObj = json_decode($jsonStr);
//
//            // Create a PaymentIntent with amount and currency
//            $paymentIntent = \Stripe\PaymentIntent::create([
//                'amount' => self::calculateOrderAmount($jsonObj->items),
//                'currency' => 'mxn',
//                'automatic_payment_methods' => ['enabled' => true]
//            ]);
//
//            $output = [
//                'clientSecret' => $paymentIntent->client_secret,
//            ];
//
//            return json_encode($output);
//        } catch (\Exception $e) {
//            http_response_code(500);
//            return json_encode(['error' => $e->getMessage()]);
//        }
//    }
}
