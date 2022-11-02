<?php

use Illuminate\Support\Facades\Route;


Auth::routes();



 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Posts

Route
    ::name('posts.')
    ->group(function () {
        Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('index');
        Route::post('/', [App\Http\Controllers\PostController::class, 'store'])->name('store');
});


