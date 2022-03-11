<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

 
Route::controller(ProductsController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/products', 'index');
  Route::get('/products/new', 'save');
  Route::post('/products/new', 'save');
  Route::get('/products/edit/{id}', 'save');
  Route::post('/products/edit/{id}', 'save');
  Route::get('/products/delete/{id}', 'delete');
});
