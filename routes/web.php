<?php

use App\Http\Controllers\{AdminController};
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'login']);
Route::get('/register', [AdminController::class, 'register']);  // todo : missing register method

Route::get('/default', [AdminController::class, 'defaultMethod']);

Route::group(['middleware' => 'auth'], static function () {
    Route::get('/home', [AdminController::class, 'dashboard']);
    Route::get('/logout', [AdminController::class, 'logout']);
    Route::group(['prefix' => 'leads'], static function () {
        Route::get('/add-lead', [AdminController::class, 'addLead']);
        Route::post('/add-lead', [AdminController::class, 'addLead']);
        Route::get('/manage-leads', [AdminController::class, 'manageLeads']);
        Route::get('/delete-lead/{id}', [AdminController::class, 'deleteLead']);
        Route::get('/edit-lead/{id}', [AdminController::class, 'editLead']);
        Route::post('/edit-lead/{id}', [AdminController::class, 'editLead']);
        Route::get('/view-lead/{id}', [AdminController::class, 'viewLead']);
        Route::get('/convert-lead/{id}', [AdminController::class, 'convertLead']);
        Route::post('/convert-lead/{id}', [AdminController::class, 'convertLead']);
    });
});

