<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
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