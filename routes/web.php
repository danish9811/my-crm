<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::controller(AdminController::class)->group(static function() {

    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login');

    Route::group(['middleware' => 'auth'], static function() {
        Route::get('/home', 'dashboard');
        Route::get('/logout', 'logout');

        Route::group(['prefix' => 'leads'], static function() {
            Route::get('/add-lead', 'addLead');
            Route::get('/manage-leads', 'manageLeads');
        });

    });

});
