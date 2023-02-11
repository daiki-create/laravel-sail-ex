<?php

// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Input;
use App\Http\Livewire\Confirm;
use App\Http\Livewire\Complete;

Route::get('/inquiry', Input::class)->name('home'); //入力画面
Route::get('/confirm', Confirm::class)->name('confirm'); //確認画面
Route::get('/complete', Complete::class)->name('complete');
