<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller {

    public function login(Request $request) {
        $submit = $request['submit'];

        // if submit key has "submit" value, then do this, it means it is a post route, post request
        // if the submti has the value of "submit", its the attribute value that is set in html submit button
        if ($submit == 'submit') {
            // we have set no validation on html , but all the validation server side,
            // https://laravel.com/docs/9.x/authentication#authenticating-users
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            if (\Auth::attempt($request->only('email', 'password'))) {
                return redirect('/home');
            } else {
                return redirect('/login')->withError('Username or Password is incorrect');
            }
        }

        // if submit is not clicked, then do this, it means it will called if request is get
        // return view('login');
    }

    public function dashboard() {
        return 'dashboard';
        return view('dashboard');
    }

}
