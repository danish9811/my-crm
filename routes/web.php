<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// route to debug and test the output just for demo and testing the eloquent and other things
Route::view('/test', 'test');

// controller group for laravel 9 route
Route::controller(AdminController::class)->group(static function () {

    Route::get('/default', 'defualtMethod');

    Route::get('/register', 'register');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login');
    Route::group(['middleware' => 'auth'], static function () {
        Route::get('/home', 'dashboard');
        Route::get('/logout', 'logout');

        Route::group(['prefix' => 'leads'], static function () {
            Route::get('/add-lead', 'addLead');
            Route::post('/add-lead', 'addLead');
            Route::get('/manage-leads', 'manageLeads');
            Route::get('/delete-lead/{id}', 'deleteLead');
            Route::get('/edit-lead/{id}', 'editLead');
        });
    });

});

