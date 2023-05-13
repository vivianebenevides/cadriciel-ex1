<?php

use App\Http\Controllers\CoffeeShopController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',     [CoffeeShopController::class, 'index']);
Route::get('/about',    [CoffeeShopController::class, 'about']);
Route::get('/products', [CoffeeShopController::class, 'products']);
Route::get('/store',    [CoffeeShopController::class, 'store']);
Route::get('/contact',  [CoffeeShopController::class, 'contact']);
Route::post('/contact', [CoffeeShopController::class, 'contactForm']);