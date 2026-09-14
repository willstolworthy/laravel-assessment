<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->Route('login');
});

Auth::routes([
    'register' => false,
]);

Route::get('/home', [
    App\Http\Controllers\HomeController::class, 'index'])->name('home');
