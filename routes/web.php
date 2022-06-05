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

Route::get('/', function () {
    return view('Welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Add_Announce_Page', [App\Http\Controllers\add_announce::class, 'index'])->name('Add_Announce_Page');
Route::get('/Home_Page', [App\Http\Controllers\home_page::class, 'index'])->name('Home_Page');
Route::post('/Add_Announce_Page', [App\Http\Controllers\add_announce::class, 'store'])->name('announce_store');
