<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');
});



Route::get('login', [AdminController::class, 'login']);
Route::post('login', [AdminController::class, 'login']);

