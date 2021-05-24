<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::get('/', [App\Http\Controllers\myController::class, 'index']);
Route::get('index', [App\Http\Controllers\myController::class, 'index']);
Route::get('about', [App\Http\Controllers\myController::class, 'about']);
Route::get('news', [App\Http\Controllers\myController::class, 'news']);
Route::get('gallery', [App\Http\Controllers\myController::class, 'gallery']);
Route::get('team', [App\Http\Controllers\myController::class, 'team']);
Route::get('contact', [App\Http\Controllers\myController::class, 'contact']);
Route::get('login', [App\Http\Controllers\myController::class, 'login']);

Route::resource('/blog', PostController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
