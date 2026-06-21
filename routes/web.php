<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/katalog', [PageController::class, 'katalog'])->name('katalog');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
Route::get('/product/{product}', [PageController::class, 'productDetail'])->name('product.show');
Route::post('/contact/send', [ContactController::class, 'send'])->middleware('throttle:5,1')->name('contact.send');
