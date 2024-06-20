<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
