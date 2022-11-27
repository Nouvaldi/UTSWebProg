<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublisherController;
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
    return view('welcome');
});

Route::get('/home', [BookController::class, 'index'])->name('home');

Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher');

Route::get('/category/{name}', [CategoryController::class, 'index'])->name('idcategory');

Route::get('/book/{title}', [BookController::class, 'idxbook'])->name('book');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
