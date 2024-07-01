<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($contactid = null)
    {
        Session::put("page", "contacts");

        if($contactid == null) {
          $contacts = Contact::query()->get()->toArray(); 
          return view('admin.contact')->with(compact('contacts'));
        } else {
            $contactone = Contact::find($contactid);
            //$banner = Banner::where('banner_id',$bannerid);
            $contact = Contact::query()->get()->toArray(); 
           return view('admin.contact')->with(compact('contacts','contactone'));
    
        }

         
        //dd($CmsPages);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $message = "Thank You For Contacting US. We Will Get Back To You";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;


                $rules = [
                    'contacts_name' => 'required',
                    'contacts_email' => 'required',
                    'contacts_pnum' => 'required',
                    'contacts_subject' => 'required',
                    'contacts_message' => 'required',
                    
                ];
                $customMessages = [
                    'contacts_name.required' => 'Name is required',
                    'contacts_email.required' => 'Email is required',
                    'contacts_pnum.required' => 'Phone Number is required',
                    'contacts_subject.required' => 'Subject of your message is required',
                    'contacts_message.required' => 'Message is required',
                ];
                     

               $this->validate($request,$rules,$customMessages);
            

              $store = [
                [
                'contacts_name' => $data['contacts_name'],
                'contacts_email' => $data['contacts_email'],
                'contacts_pnum' => $data['contacts_pnum'],
                'contacts_subject' => $data['contacts_subject'],
                'contacts_message' => $data['contacts_message'],
                'contacts_date' => date("Y-m-d"),

               ]
            ];

               $mailData = [
                'title' => 'Mail from ' . $data['contacts_name'],
                'contacts_email' => $data['contacts_email'],
                'contacts_pnum' => $data['contacts_pnum'],
                'contacts_subject' => $data['contacts_subject'],
                'contacts_message' => $data['contacts_message'],
                'contacts_date' => date("Y-m-d H:i"),
               ];

              
                if(Mail::to('adefolarin2017@gmail.com')->send(new ContactMail($mailData))) {
                    Contact::insert($store);
                    return redirect('contact')->with('success_message', $message);
                }
              

          }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($contactid)
    {
        Contact::where('contacts_id',$contactid)->delete();
        return redirect('admin/contact')->with('success_message', 'Contact Request deleted successfully');
    }

        /**
     * Display a listing of the resource.
     */
    public function contactFront($contactid = null)
    {
        Session::put("page", "contacts");

        if($contactid == null) {
          $contacts = Contact::query()->get()->toArray(); 
          return view('contact')->with(compact('contacts'));
        } else {
            $contactone = Contact::find($contactid);
            //$banner = Banner::where('banner_id',$bannerid);
            $contact = Contact::query()->get()->toArray(); 
           return view('contact')->with(compact('contacts','contactone'));
    
        }

         
        //dd($CmsPages);

    }
}
