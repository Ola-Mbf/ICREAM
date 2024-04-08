<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ChefsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\InfoSystemsController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Views Routes
Route::get('/',[ViewsController::class, 'index'])->name('index');
Route::get('/about',[ViewsController::class, 'about'])->name('about');
Route::get('/contact',[ViewsController::class, 'contact'])->name('contact');
Route::get('/gallery',[ViewsController::class, 'gallery'])->name('gallery');
Route::get('/product',[ViewsController::class, 'product'])->name('product');
Route::get('/service',[ViewsController::class, 'service'])->name('service');

// Admin side
   // category
Route::controller(CategoriesController::class)->group(function () {
    Route::get('/categories/create', 'create')->name('create-category');
    Route::post('/categories/create', 'store')->name('store-category');
    Route::get('/categories', 'index')->name('index-categories');
    Route::get('/categories/edit/{id}', 'edit')->name('edit-category');
    Route::post('/categories/edit/{id}', 'update')->name('update-category');
    Route::get('/categories/delete/{id}', 'delete')->name('delete-category');
    });



   // product
Route::controller(ProductsController::class)->group(function () {

    Route::get('/products/create', 'create')->name('create-product');
Route::post('/products/create', 'store')->name('store-product');
Route::get('/products', 'index')->name('index-products');
Route::get('/products/edit/{id}', 'edit')->name('edit-product');
Route::post('/products/edit/{id}', 'update')->name('update-product');
Route::get('/products/delete/{id}', 'delete')->name('delete-product');
});

Route::controller(ViewsController::class)->group(function () {
    Route::post('/contact','store_message')->name('store-message');
    Route::get('/order/{id}','find_order')->name('find-order');
});

Route::get('/messages', [MessagesController::class,'index'])->name('index-messages');


//Route::post('/order/{id}', 'OrdersController@save_order')->name('save-order');
Route::controller(OrdersController::class)->group(function () {
    Route::get('/orders', 'index')->name('index-orders');
    Route::post('/order', 'save_order')->name('save-order');
});



   //Service
   Route::controller(ServicesController::class)->group(function () {
    Route::get('/services/create', 'create')->name('create-service');
Route::post('/services/create', 'store')->name('store-service');
Route::get('/services', 'index')->name('index-services');
Route::get('/services/edit/{id}', 'edit')->name('edit-service');
Route::post('/services/edit/{id}', 'update')->name('update-service');
Route::get('/services/delete/{id}', 'delete')->name('delete-service');
    
   });

   //Chef
Route::controller(ChefsController::class)->group(function () {
    Route::get('/chefs/create', 'create')->name('create-chef');
    Route::post('/chefs/create', 'store')->name('store-chef');
    Route::get('/chefs', 'index')->name('index-chefs');
    Route::get('/chefs/edit/{id}', 'edit')->name('edit-chef');
    Route::post('/chefs/edit/{id}', 'update')->name('update-chef');
    Route::get('/chefs/delete/{id}', 'delete')->name('delete-chef');
   });


    //Client
 Route::controller(ClientsController::class)->group(function () {
Route::get('/clients/create', 'create')->name('create-client');
Route::post('/clients/create', 'store')->name('store-client');
Route::get('/clients', 'index')->name('index-clients');
Route::get('/clients/edit/{id}', 'edit')->name('edit-client');
Route::post('/clients/edit/{id}', 'update')->name('update-client');
Route::get('/clients/delete/{id}', 'delete')->name('delete-client');
});
    //Info_System
Route::controller(InfoSystemsController::class)->group(function () {
Route::get('/infosystems/create', 'create')->name('create-info');
Route::post('/infosystems/create', 'store')->name('store-info');
Route::get('/infosystems', 'index')->name('index-infos');
Route::get('/infosystems/edit/{id}', 'edit')->name('edit-info');
Route::post('/infosystems/edit/{id}', 'update')->name('update-info');
Route::get('/infosystems/delete/{id}', 'delete')->name('delete-info');
});