<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/',[MainController::class,'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get('/actions',[ActionController::class,'getByCategory']);

Route::resource('/actions',ActionController::class);
Route::resource('/categories',CategoriesController::class);

