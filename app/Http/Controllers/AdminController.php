<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
    public function login(Request $request) {
        // validateions
        return redirect('login');
    }

    public function home() {
        return redirect('dashboard')->->withErrors('Username or Password is incorrect');
    }

}
