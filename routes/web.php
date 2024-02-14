<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController as PageController;
use App\Http\Controllers\Guest\HomeController as HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/movies', [PageController::class, 'index']) ->name('index_movies');

Route::get('/movies/{id}/show', [PageController::class, 'show'])->name('show_movies');
