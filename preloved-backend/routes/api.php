<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('cors')->group(function () {
//     Route::get('products', 'API\ProductController@all');
//     Route::post('checkout', 'API\CheckoutController@checkout');
//     Route::get('transactions/{id}', 'API\TransactionController@get');
// });

// method get bisa langsung di akses di url
// @all artinya fungsi all di product controller api
Route::get('products', 'API\ProductController@all');
Route::post('checkout', 'API\CheckoutController@checkout');
Route::get('transactions/{id}', 'API\TransactionController@get');
Route::post('guestbook', 'API\GuestbookController@post');
Route::post('subscriber', 'API\SubscriberController@post');
Route::post('transfer', 'API\TransferController@post');
