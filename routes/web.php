<?php

use App\Http\Controllers\{AdminController};
use Illuminate\Support\Facades\Route;

// route to debug and test the output just for demo and testing the eloquent and other things

// this is only for testing purpose
// Route::get('/dummy', [DummyController::class, 'dummy']);    // create DummyController with dummy model too

// controller group for laravel 9 route

// laravel 9 routes
//Route::controller(AdminController::class)->group(static function () {
//
//    Route::get('/default', 'defaultMethod');
//
//    Route::get('/register', 'register');
//    Route::get('/login', 'login')->name('login');
//    Route::post('/login', 'login');
//
//    Route::group(['middleware' => 'auth'], static function () {
//        Route::get('/home', 'dashboard');
//        Route::get('/logout', 'logout');
//
//        Route::group(['prefix' => 'leads'], static function () {
//            Route::get('/add-lead', 'addLead');
//            Route::post('/add-lead', 'addLead');
//            Route::get('/manage-leads', 'manageLeads');
//            Route::get('/delete-lead/{id}', 'deleteLead');
//            Route::get('/edit-lead/{id}', 'editLead');
//            Route::post('/edit-lead/{id}', 'editLead');
//        });
//    });
//});

Route::get('/register', [AdminController::class, 'register']);
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/login', [AdminController::class, 'login']);

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
    });
});

