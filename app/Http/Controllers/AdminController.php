<?php

namespace App\Http\Controllers;

use App\Models\Dummy;
use App\Models\Lead;
use App\Models\User;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller {

    /**
     * <h3>login(Request $request)</h3>
     * This method is written to loggin the user with given credentials, if wrong, shows the user friendly error message
     * and redirect the user to the home page, which is dashboard. Layout is indepentident from blade layout <br>
     * Handles both <pre>get</pre> and <pre>post</pre> requests
     * @param Request $request
     * @return Application|Factory|View message
     * @author danish mehmood
     */
    public function login(Request $request) {   // login
        $submit = $request['submit'];
        if ($submit === 'submit') {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);
            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect('/home');
            }
            // todo : use reponse() here just like otif guys do
            return redirect('/login')->withError('Username or Password is incorrect');  // withError method not detected by phpstorm2020.1
        }
        return view('login');
    }

    /**
     * <h3>dashboard()</h3>
     * Simply let the user to the access the dashboard, which is home, and protected route
     *
     * @return Application|Factory|View to the dashboard
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
     * @return Application|RedirectResponse|Redirector
     * @author danish mehmood
     **/
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    /**
     * method to add lead, the single record, or show the blade page for making user inputting the lead details
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     * @author danish mehmood
     */
    public function addLead(Request $request) { // add-lead
        $submit = $request['submit'];
        if ($submit === 'submit') {
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'title' => 'required',
                'company' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required|max:25'
            ]);
            $this->saveLead(new Lead(), $request);
            return redirect('/leads/manage-leads');
        }
        return view('leads/add_lead');
    }

    public function manageLeads() { // manage-leads
        return view('leads/manage_leads')->with('leadsDataArr', Lead::all());
    }

    public function deleteLead($id) {   // delete-lead/{id}
        $lead = Lead::find($id);
        if ($lead == '') {      // todo : simply we can do, if lead record is NULL against the id
            return redirect('/leads/manage-leads');
        } else {
            $lead->delete();
            return redirect('/leads/manage-leads');
        }
    }

    public function editLead($id, Request $request) {    // edit-lead/{id}
        $lead = Lead::find($id);
        if ($lead == '') {  // todo : handle this scenario carefull with isset, NULLs
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
            ]);

            $this->saveLead(new Lead, $request);
            return redirect('/leads/manage-leads');
        }
        return view('/leads/edit_lead', ['lead_details' => $lead]);
    }

    private function saveLead(Lead $lead, Request $request) {
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

        // todo : handle case if model is saved or not, return true or false
        $lead->save();
    }

    public function defaultMethod() {
        // practice code more and more

    }

}
