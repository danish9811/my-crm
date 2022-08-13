<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function login(Request $request) {

        $submit = $request['submit'];

        // if submit key has "submit" value, then do this, it means it is a post route, post request
        // if the submti has the value of "submit", its the attribute value that is set in html submit button
        if ($submit === 'submit') {
            // we have set no validation on html , but all the validation server side,
            // https://laravel.com/docs/9.x/authentication#authenticating-users
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);

            if (\Auth::attempt($request->only('email', 'password'))) {
                return redirect('/home');
            }

            return redirect('/login')->withError('Username or Password is incorrect');  // withError method not detected by phpstorm2020.1
        }

        // if submit is not clicked, then do this, it means it will called if request is get
        return view('login');
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function logout() {
        \Session::flush();  // destory the session
        \Auth::logout();    // logout the user
        return redirect('login');
    }

    // the function that goes under the prefix leads
    public function addLead(Request $request) {
        $submit = $request['submit'];

        // we will add backend validations only
        if ($submit === 'submit') {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'title' => 'required',
                'company' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required|max:25'
                // other fields are nullable and not made mandatory in blade
            ]);

            // now pick up each key/value from request, and give to the model

            $leads = new Lead();    // object of Lead model
            $leads->first_name = $request['first_name'];
            $leads->last_name = $request['last_name'];
            $leads->title = $request['title'];
            $leads->company = $request['company'];
            $leads->email = $request['email'];
            $leads->phone_number = $request['phone_number'];
            $leads->lead_status = $request['lead_status'];
            $leads->lead_source = $request['lead_source'];
            $leads->street = $request['street'];
            $leads->city = $request['city'];
            $leads->state = $request['state'];
            $leads->country = $request['country'];
            $leads->zip_code = $request['zip_code'];
            $leads->description = $request['description'];

            $leads->save();

            // redirect the user to the /leads/manage-leads

            return redirect('/leads/manage-leads');
            // return redirect()->route('/manage-leads');

        }

        return view('leads/add_lead');
    }

    // it shows the complete list of data leads added
    public function manageLeads() {
        return view('leads/manage_leads')->with('leadsDataArr', Lead::all());
    }

    // deleting a particular lead with dynamic id given by the get url, then redirect to manage_leads
    public function deleteLead(int $id) {
        Lead::find($id)->delete();  // nullPointerException
        return redirect('/leads/manage-leads');
    }

    public function editLead() {    // edit-lead

    }

    public function defaultMethod() {
        // the default method to test the data
    }

}
