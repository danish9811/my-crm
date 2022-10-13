<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Contact;
use App\Models\Deal;
use App\Models\Lead;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;

class AdminController extends Controller
{

    /**
     * <h3>login(Request $request)</h3>
     * This method is written to loggin the user with given credentials, if wrong, shows the user friendly error message
     * and redirect the user to the home page, which is dashboard. Layout is indepentident from blade layout <br>
     * Handles both <pre>get</pre> and <pre>post</pre> requests
     * @param Request $request
     * @return Application|Factory|View message
     * @author danish mehmood
     */
    public function login(Request $request)
    {   // login
        if ($request['submit'] === 'submit') {
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
    public function dashboard()
    {   // home
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
    public function logout()
    {
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
    public function addLead(Request $request)
    { // add-lead
        if ($request['submit'] === 'submit') {
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

    public function manageLeads()
    {
        return view('leads/manage_leads')->with('leadsDataArr', Lead::all());
    }

    public function deleteLead($id)
    {   // delete-lead/{id}
        $lead = Lead::find($id);
        if ($lead === NULL)
            return redirect('/leads/manage-leads');
        $lead->delete();
        return redirect('/leads/manage-leads');
    }

    public function editLead($id, Request $request)
    {    // edit-lead/{id}
        $lead = Lead::find($id);
        if ($lead === NULL)
            return redirect('/leads/manage-leads');
        if ($request['submit'] === 'submit') {
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

    private function saveLead(Lead $lead, Request $request)
    {
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
        return $lead->save();
    }

    public function viewLead($id)
    { // view-lead(id)
        $lead = Lead::find($id);
        return ($lead == NULL) ? redirect('/leads/manage-leads') : view('/leads/view_lead', compact('lead'));
    }

    public function convertLead($id, Request $request)
    {  // convert-lead(id)
        $lead = Lead::find($id);

        if ($lead === NULL)
            return redirect('/leads/manage-leads');

        if ($request['submit'] === 'submit') {
            $request->validate([
                'amount' => 'required',
                'deal_name' => 'required',
                'closing_date' => 'required',
                'deal_stage' => 'required'
            ]);

            $account = new Account();
            $account->account_name = $lead->company;
            $account->phone_number = $lead->phone_number;
            $account->save();

            $accountId = $account->id;

            $contact = new Contact();
            $contact->contact_name = $lead->first_name . ' ' . $lead->last_name;
            $contact->account_id = $accountId;
            $contact->email = $lead->email;
            $contact->phone_number = $lead->phone_number;
            $contact->save();

            $contact_id = $contact->id;

            $deal = new Deal();
            $deal->amount = $request['amount'];
            $deal->deal_name = $request['deal_name'];
            $deal->closing_date = $request['closing_date'];
            $deal->deal_stage = $request['deal_stage'];
            $deal->account_id = $accountId;
            $deal->contact_id = $contact_id;
            $deal->save();

            $lead->delete();

            return redirect('/leads/manage-leads');
        }

        return view('/leads/convert_lead', compact('lead'));
    }

    public function defaultMethod(): void
    {   
        // default
        // todo : write practice code here for default method
    }
}
