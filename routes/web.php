<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



// Route::get('login', [AdminController::class, 'login']);
// Route::post('login', [AdminController::class, 'login']);
// Route::get('home', [AdminController::class, 'dashboard']);


Route::controller(AdminController::class)->group(function() {
    Route::get('/login', 'login');
    Route::post('/login', 'login');
    Route::get('/home', 'dashboard');
});
