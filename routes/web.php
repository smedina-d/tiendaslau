<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('info',function (){
    return phpinfo();
})->name('home');

Route::get('payment-checkout',[CheckoutController::class,'paymentForm']);

Route::get('/billing-portal', function (Request $request) {
    return $request->user()->redirectToBillingPortal();
});

Route::post('stripe', [CheckoutController::class, 'stripePost'])->name('stripe.post');

Route::post('/create-payment',[CheckoutController::class,'pagameMardeto']);

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [MainController::class,'index']);
Route::get('/quick-view/{param}',[MainController::class,'quickView']);
Route::get('/shop/{cat_id}/{prod_id}',[MainController::class, 'showSingleProduct']);
Route::get('/main/shop/{cat_id?}',[MainController::class,'showAll']);

Route::get('cart',[CartController::class,'cart']);
Route::post('save/cart',[CartController::class,'saveCart']);
Route::get('remove/item/{id}',[CartController::class,'removeItem']);
Route::get('checkout/{session_id}',[CheckoutController::class,'checkout']);

//Route::get('upload',[MainController::class,'createProducts']);
//Route::post('save/product',[MainController::class,'saveProduct']);

/**
 * Admin Section
 */

Route::get('admin',[AdminController::class,'index'])->middleware('auth');
Route::get('add/product',[AdminController::class,'create_products'])->middleware('auth');
Route::post('create/product',[AdminController::class,'saveProduct']);
Route::get('edit/product',[AdminController::class,'editProduct']);
Route::get('edit/images/{id}',[AdminController::class,'editImagenes']);
Route::get('/get-product/{id}',[AdminController::class,'productEndpoint']);
Route::post('/update-images',[AdminController::class,'updateImages']);

Route::post('/login-checkout',[CheckoutController::class,'loginOnCheckout']);
