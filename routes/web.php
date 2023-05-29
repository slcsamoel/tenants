<?php

use Illuminate\Support\Facades\Route;

require __DIR__.'/tenant.php';

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
