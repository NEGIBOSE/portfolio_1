<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sample', [\App\Http\Controllers\Sample\IndexController::class, 'show']);
Route::get('/sample/{id}', [\App\Http\Controllers\Sample\IndexController::class, 'showId']);

//ホーム
Route::get('/home', \App\Http\Controllers\Home\IndexController::class)
->name('home.index');

//検索
Route::get('/home/search', \App\Http\Controllers\Home\Search\SearchController::class)
->name('search.search');

//登録
Route::get('/home/register', \App\Http\Controllers\Home\Register\RegisterController::class)
->name('register.register');

