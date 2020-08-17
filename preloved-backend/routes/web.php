<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'DashboardController@index')->name('dashboard');
// Auth::routes();
// agar yang pegang 1 admin aja, jadi tidak bisa register lagi selain 1 admin tersebut
Auth::routes(['register' => false]);
// Auth::routes();

// ini di hapus agar pas masuk login dulu biar pas di refresh tidak langsung ke halaman
// home tapi user di arahkan harus login dulu
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('products/{id}/gallery', 'ProductController@gallery')
    ->name('products.gallery');

// menggunakan route agar bisa terpakai dan bisa dipanggil
// Route::resource('products','ProductController');

Route::resource('products','ProductController');
// Route::get('products','ProductController@index');
// Route::get('products','ProductController@search');
Route::get('/products/cetakPdf', ['uses' => 'ProductController@cetakPdf', 'as' => 'product.cetakPdf']);
Route::delete('products/{id}','ProductController@destroy')->name('products.destroy');
Route::resource('categories', 'CategoryController');
Route::resource('genders', 'GenderController');

Route::resource('product-galleries','ProductGalleryController');
Route::delete('product-galleries/{id}','ProductGalleryController@destroy')->name('product-galleries.destroy');

// untuk menyambungkan dalam bagian update status transaksi
Route::get('transactions/{id}/set-status', 'TransactionController@setStatus')
    ->name('transactions.status');

Route::resource('transactions','TransactionController');
Route::get('/transactions/cetakPdf', ['uses' => 'TransactionController@cetakPdf', 'as' => 'transaction.cetakPdf']);
Route::delete('transactions/{id}','TransactionController@destroy')->name('transactions.destroy');


Route::resource('guestbooks', 'GuestbookController');
// Route::get('guestbooks/cetakPdf','GuestbookController@cetakPdf')
//     ->name('guestbooks.laporanpdf');

// Route::get('/guestbook/cetakPdf', 'GuestbookController@cetakPdf');
// <a href="/pegawai/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>

Route::get('/guestbooks/cetakPdf', ['uses' => 'GuestbookController@cetakPdf', 'as' => 'guestbook.cetakPdf']);
Route::delete('guestbooks/{id}','GuestbookController@destroy')->name('guestbooks.destroy');

// Route::get('subscribers', 'SubscriberController@index');
Route::resource('subscribers', 'SubscriberController');
// Route::get('/subscribers/cetakPdf', 'SubscribersController@cetakPdf');
Route::get('/subscribers/cetakPdf', ['uses' => 'SubscriberController@cetakPdf', 'as' => 'subscriber.cetakPdf']);
// Route::get('/delete/subscribers/{id}', 'SubscriberController@destroy');
Route::delete('subscribers/{id}','SubscriberController@destroy')->name('subscribers.destroy');


Route::resource('transfers','TransferController');
// Route::post('formSubmit','TransferControllor@formSubmit');

// Route::group(['middleware' => 'auth'], function(){
//     Route::get('/fileupload','TransferController@index');
//     Route::get('/fileupload/create','TransferController@create');
//     Route::post('/fileupload/upload-image','TransferController@store');
// });