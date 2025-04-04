<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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


Route::get('/', [MessageController::class, 'index'])->name('home');

//require __DIR__.'/auth.php';

Route::resource('messages', MessageController::class)->only([
    'index',  'store'
    ]);
