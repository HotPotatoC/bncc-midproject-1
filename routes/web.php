<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\BookController;
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

Route::get('/', [AppController::class, 'index'])->name('home');

Route::get('/manage', [BookController::class, 'index'])->name('manage.index');

Route::get('/manage/create', [BookController::class, 'create'])->name('manage.create');
Route::post('/manage/store', [BookController::class, 'store'])->name('manage.store');

Route::get('/manage/{id}/edit', [BookController::class, 'edit'])->name('manage.edit');
Route::patch('/manage/{id}/update', [BookController::class, 'update'])->name('manage.update');

Route::delete('/manage/{id}/destroy', [BookController::class, 'destroy'])->name('manage.destroy');

Route::get("/{id}", [AppController::class, 'show'])->name('show');
