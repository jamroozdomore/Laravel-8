<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('indexabout');
Route::get('/contact', [ContactController::class, 'index'])->name('indexcontact');
Route::get('/product', [ProductController::class, 'index'])->name('indexproduct');

Route::post('/product', [ProductController::class, 'create'])->name('createproduct');

Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('editproduct');

Route::post('/edit/{id}', [ProductController::class, 'update'])->name('updateproduct');

Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('deleteproduct');

