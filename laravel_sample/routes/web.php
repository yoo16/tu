<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/item/', [ItemController::class, 'index'])->name('item.index');
Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
Route::get('/item/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
Route::post('/item/store', [ItemController::class, 'store'])->name('item.store');
Route::post('/item/update/{id}', [ItemController::class, 'update'])->name('item.update');
Route::post('/item/destroy/{id}', [ItemController::class, 'destroy'])->name('item.destroy');