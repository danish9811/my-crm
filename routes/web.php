<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('login', [AdminController::class, 'login']);
Route::post('login', [AdminController::class, 'login']);

