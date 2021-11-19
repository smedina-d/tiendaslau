<?php

use App\Http\Controllers\MainController;
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
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [MainController::class,'index']);
Route::get('/shop/{cat_id}/{prod_id}',[MainController::class, 'showSingleProduct']);

Route::get('cart',[MainController::class,'cart']);

Route::get('create/products',[MainController::class,'createProducts']);
Route::post('save/product',[MainController::class,'saveProduct']);
