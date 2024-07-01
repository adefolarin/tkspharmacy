<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\NewsLetter;
use Mail;
use App\Mail\NewsLetterMail;

class NewsLetterController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index($newsletterid = null)
    {
        Session::put("page", "newsletters");

        if($newsletterid == null) {
          $newsletters = NewsLetter::query()->get()->toArray(); 
          return view('admin.newsletter')->with(compact('newsletters'));
        } else {
            $eventregsone = NewsLetter::find($newsletterid);
            //$banner = Banner::where('banner_id',$bannerid);
           $newsletters = NewsLetter::query()->get()->toArray(); 
           return view('admin.newsletter')->with(compact('newsletters','newslettersone'));
    
        }

         
        //dd($CmsPages);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $message = "You have successfully subscribed to our news letter";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Event Category Vallidations

               $rules = [
                    'newsletters_email' => 'required',
                    
                ];
                $customMessages = [
                    'newsletters_email.required' => 'Email is required',
                ];
                     

               $this->validate($request,$rules,$customMessages);
            

              $store = [
                [
                'newsletters_email' => $data['newsletters_email'],
                'newsletters_date' => date("Y-m-d"),

               ]
            ];

               $mailData = [
                'newsletters_email' => $data['newsletters_email'],
                'newsletters_date' => date("Y-m-d"),
               ];

               $newsletter = new NewsLetter;

              
               if(Mail::to('adefolarin2017@gmail.com')->send(new NewsLetterMail($mailData))) {
                $newsletter->insert($store);
            }
                return redirect('newsletter')->with('success_message', $message);
              

          }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($eventcategoriesid)
    {
        //$eventcategoryone = NewsLetterCategory::find($eventcategoriesid);
        //$banner = Banner::where('banner_id',$bannerid);
        //return view('admin.eventcategory')->with(compact('eventcategoryone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
 
    }


    /**
     * Remove the specified resource from storage.
     */

     public function newsletterFront() {
        return view('newsletter');
     }
}
