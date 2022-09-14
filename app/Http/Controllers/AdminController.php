<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class AdminController extends Controller {

    /**
     * <h3>login(Request $request)</h3>
     * This method is written to loggin the user with given credentials, if wrong, shows the user friendly error message
     * and redirect the user to the home page, which is dashboard. Layout is indepentident from blade layout
     *
     * @return void | Error message
     * @author danish mehmood
     **/
    public function login(Request $request) {   // login

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


    /**
     * <h3>dashboard()</h3>
     * Simply let the user to the access the dashboard, which is home, and protected route
     *
     * @return view to the dashboard
     * @author danish mehmood
     **/
    public function dashboard() {   // home
        return view('dashboard');
    }

    /**
     * <h3>logout()</h3>
     * Logout the user by flushing the session and forgetting the authed user,
     * redirects the user to the login page
     *
     * @return view
     * @author danish mehmood
     **/
    public function logout() {  // logout
        \Session::flush();  // destory the session
        \Auth::logout();    // logout the user
        return redirect('login');
    }


    /**
     * undocumented function
     *
     * @return void
     * @author
     **/
    public function addLead(Request $request) { // add-lead
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

            $lead = new Lead();    // object of Lead model
            $lead->first_name = $request['first_name'];
            $lead->last_name = $request['last_name'];
            $lead->title = $request['title'];
            $lead->company = $request['company'];
            $lead->email = $request['email'];
            $lead->phone_number = $request['phone_number'];
            $lead->lead_status = $request['lead_status'];
            $lead->lead_source = $request['lead_source'];
            $lead->street = $request['street'];
            $lead->city = $request['city'];
            $lead->state = $request['state'];
            $lead->country = $request['country'];
            $lead->zip_code = $request['zip_code'];
            $lead->description = $request['description'];
            $lead->save();

            // redirect the user to the /leads/manage-leads

            return redirect('/leads/manage-leads');
            // return redirect()->route('/manage-leads');

        }

        return view('leads/add_lead');
    }


    // it shows the complete list of data leads added
    public function manageLeads() { // manage-leads
        return view('leads/manage_leads')->with('leadsDataArr', Lead::all());
    }

    // deleting a particular lead with dynamic id given by the get url, then redirect to manage_leads
    public function deleteLead(int $id) {   // delete-lead/{id}
        // Lead::find($id)->delete();  // throwing nullPointerException
        // Lead::where('id', $id)->delete();  // nullPointerException free
        // return redirect('/leads/manage-leads');
        // can be a more better approach, but we are doing this along with youtuber

        $lead = Lead::find($id);
        if ($lead == '') {  // if found no record agianst this id
            return redirect('/leads/manage-leads'); // simply redirect to this
        } else {    // if found record against that id, delele id the redirect
            $lead->delete();    // no chance of nullpointerexception to be thrown by laravel
            return redirect('/leads/manage-leads');
        }
    }


    public function editLead($id, Request $request) {    // edit-lead/{id}

        $lead = Lead::find($id);

        if ($lead == '') {
            return redirect('/leads/manage-leads');
        }

        if ($request['submit'] == 'submit') {

            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'title' => 'required',
                'company' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required|max:25'
                // other fields are nullable and not made mandatory in blade
            ]);

            $lead->first_name = $request['first_name'];
            $lead->last_name = $request['last_name'];
            $lead->title = $request['title'];
            $lead->company = $request['company'];
            $lead->email = $request['email'];
            $lead->phone_number = $request['phone_number'];
            $lead->lead_status = $request['lead_status'];
            $lead->lead_source = $request['lead_source'];
            $lead->street = $request['street'];
            $lead->city = $request['city'];
            $lead->state = $request['state'];
            $lead->country = $request['country'];
            $lead->zip_code = $request['zip_code'];
            $lead->description = $request['description'];
            $lead->save();

            return redirect('/leads/manage-leads');
        }

        return view('/leads/edit_lead', ['lead_details' => $lead]);
    }

    public function anotherMethod() {
        // proposal
    }


}
