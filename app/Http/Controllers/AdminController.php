<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
    public function login(Request $request) {
        return "hello world";
        // validateions
        return redirect('login');
    }

    public function home() {
        return "hello world";
        // return redirect('home')->withErrors('Username or password is incorrect');
    }

}
