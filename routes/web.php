<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::controller(AdminController::class)->group(function() {
    Route::get('/login', 'login');
    Route::post('/login', 'login');
    Route::get('/home', 'dashboard');
});
