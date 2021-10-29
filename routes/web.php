<?php

use App\Models\Penspining;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\TimerController;
use App\Http\Controllers\AnecdotesController;
use App\Http\Controllers\GdzHelperController;
use App\Http\Controllers\MusicJsonController;
use App\Http\Controllers\EschoolAvgController;
use App\Http\Controllers\PenspiningController;

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
    LinksController::class, 'show'
])->name('links');

Route::get('/faq', [
    MainController::class, 'faq'
])->name('faq');

Route::get('/apps/timer/show', [
    TimerController::class, 'index'
])->name('apps-timer');

Route::group([
    'prefix' => 'note',
], function () {

    Route::get('/show', [
        NoteController::class, 'show'
    ])->name('apps-note-show');

    Route::post('/add', [
        NoteController::class, 'add'
    ])->name('apps-note-add');

    Route::post('/delete/{id}', [
        NoteController::class, 'delete'
    ])->name('apps-note-delete');
});

Route::group([
    'prefix' => 'music',
], function () {

    Route::get('/show', [
        MusicJsonController::class, 'show'
    ])->name('apps-json-show');
});

Route::group([
    'prefix' => 'anecdotes',
], function () {

    Route::get('/show', [
        AnecdotesController::class, 'show'
    ])->name('apps-anecdotes-show');
});

Route::get('pentrick/show', [
    PenspiningController::class, 'show'
])->name('apps-penspining-show');

Route::group([
    'prefix' => 'child',
], function () {

    Route::get('/show/{page?}', [
        ChildController::class, 'show'
    ])->name('apps-child-show');
});

Route::group([
    'prefix' => 'gdz-helper',
], function () {

    Route::get('/show', [
        GdzHelperController::class, 'show'
    ])->name('apps-gdz_helper');

    Route::post('/show/search', [
        GdzHelperController::class, 'handler'
    ])->name('apps-gdz_helper-post');
});

Route::group([
    'prefix' => 'avg',
], function () {

    Route::get('/show', [
        EschoolAvgController::class, 'show'
    ])->name('apps-eschool_avg-show');

});