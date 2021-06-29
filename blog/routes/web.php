<?php

use App\Http\Controllers\postsController;
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

Route::get('/create',[postsController::class, 'index']);

Route::post('/store',[postsController::class, 'store']);

Route::get('/show',[postsController::class,'show']);

Route::get('/delete/{id}',[postsController::class,'delete']);

Route::get('/edit/{id}',[postsController::class,'editData']);

Route::post('/edit_data',[postsController::class, 'updateData']);