<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('home.dashboard');
Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'detail'])->name('post.detail');

Route::resource('posts',\App\Http\Controllers\PostController::class);

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
*/