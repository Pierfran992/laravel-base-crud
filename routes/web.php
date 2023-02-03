<?php

use App\Http\Controllers\MySaints;
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

// INDEX
Route::get('/', [MySaints::class, 'home'])
    ->name('home');

// SHOW
Route::get('/saint/show/{id}', [MySaints::class, 'show'])
    ->name('saint.show');

// DELETE
Route::get('/saint/delete/{id}', [MySaints::class, 'delete'])
    ->name('saint.delete');
