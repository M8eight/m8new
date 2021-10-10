<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TimerController;

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

Route::get('/', [
    MainController::class, 'index'
])->name('index');

Route::get('/links', [
    MainController::class, 'links'
])->name('links');

Route::get('/faq', [
    MainController::class, 'faq'
])->name('faq');


    Route::get('/apps/timer', [
        TimerController::class, 'index'
    ])->name('apps-timer');