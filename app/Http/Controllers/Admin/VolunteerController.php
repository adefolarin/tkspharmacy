<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\VolunteerMail;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($volunteersid = null)
    {
        Session::put("page", "volunteers");

        if ($volunteersid == null) {
            $volunteers = Volunteer::query()->get()->toArray();
            return view('admin.volunteer')->with(compact('volunteers'));
        } else {
            $volunteersone = Volunteer::find($volunteersid);
            //$banner = Banner::where('banner_id',$bannerid);
            $eventregs = Volunteer::query()->get()->toArray();
            return view('admin.volunteer')->with(compact('volunteers', 'volunteersone'));
        }


        //dd($CmsPages);

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $message = "You have successfully volunteered";

        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            //dd($data);

            //  Vallidations
            $rules = [
                'volunteers_name' => 'required',
                'volunteers_email' => 'required',
                'volunteers_pnum' => 'required',
                'volunteers_mailaddress' => 'required',
                'volunteers_time' => 'required',
                'volunteers_skill' => 'required',
                'volunteers_qual' => 'required',
                'volunteers_exp' => 'required',
                'volunteers_lang' => 'required',
                'volunteers_interest' => 'required',
                'volunteers_training' => 'required',
                'volunteers_emergcontact' => 'required',
                'volunteers_emergrel' => 'required',
                'volunteers_emergcontactinfo' => 'required',
                'volunteers_medinfo' => 'required',
                'volunteers_ref' => 'required',
                'volunteers_check' => 'required',
            ];
            $customMessages = [
                'volunteers_name.required' => 'Name is required',
                'volunteers_email.required' => 'Email is required',
                'volunteers_pnum.required' => 'Mailing address is required',
                'volunteers_mailaddress.required' => 'Email is required',
                'volunteers_time.required' => 'Select the time you will be available',
                'volunteers_skill.required' => 'Skill is required',
                'volunteers_qual.required' => 'Qualification is required',
                'volunteers_exp.required' => 'Experience is required',
                'volunteers_lang.required' => 'Language is required',
                'volunteers_interest.required' => 'Interest is required',
                'volunteers_training.required' => 'Avaialability for training is required',
                'volunteers_emergcontact.required' => 'Emergency contact name is required',
                'volunteers_emergrel.required' => 'Relationship is required',
                'volunteers_emergcontactinfo.required' => 'Emergency contact info is required',
                'volunteers_medinfo.required' => 'Medical Information is required',
                'volunteers_ref.required' => 'Reference is required',
                'volunteers_check.required' => 'Consent for background check is required',
            ];

            $this->validate($request, $rules, $customMessages);


            $store = [
                [
                    'volunteers_name' => $data['volunteers_name'],
                    'volunteers_email' => $data['volunteers_email'],
                    'volunteers_pnum' => $data['volunteers_pnum'],
                    'volunteers_mailaddress' => $data['volunteers_mailaddress'],
                    'volunteers_time' => $data['volunteers_time'],
                    'volunteers_skill' => $data['volunteers_skill'],
                    'volunteers_qual' => $data['volunteers_qual'],
                    'volunteers_exp' => $data['volunteers_exp'],
                    'volunteers_lang' => $data['volunteers_lang'],
                    'volunteers_interest' => $data['volunteers_interest'],
                    'volunteers_training' => $data['volunteers_training'],
                    'volunteers_emergcontact' => $data['volunteers_emergcontact'],
                    'volunteers_emergrel' => $data['volunteers_emergrel'],
                    'volunteers_emergcontactinfo' => $data['volunteers_emergcontactinfo'],
                    'volunteers_medinfo' => $data['volunteers_medinfo'],
                    'volunteers_ref' => $data['volunteers_ref'],
                    'volunteers_check' => $data['volunteers_check'],
                    'volunteers_date' => date("Y-m-d"),

                ]
            ];

            $mailData = [
                'title' => 'Mail from ' . $data['volunteers_name'],
                'volunteers_name' => $data['volunteers_name'],
                    'volunteers_email' => $data['volunteers_email'],
                    'volunteers_pnum' => $data['volunteers_pnum'],
                    'volunteers_mailaddress' => $data['volunteers_mailaddress'],
                    'volunteers_time' => $data['volunteers_time'],
                    'volunteers_skill' => $data['volunteers_skill'],
                    'volunteers_qual' => $data['volunteers_qual'],
                    'volunteers_exp' => $data['volunteers_exp'],
                    'volunteers_lang' => $data['volunteers_lang'],
                    'volunteers_interest' => $data['volunteers_interest'],
                    'volunteers_training' => $data['volunteers_training'],
                    'volunteers_emergcontact' => $data['volunteers_emergcontact'],
                    'volunteers_emergrel' => $data['volunteers_emergrel'],
                    'volunteers_emergcontactinfo' => $data['volunteers_emergcontactinfo'],
                    'volunteers_medinfo' => $data['volunteers_medinfo'],
                    'volunteers_ref' => $data['volunteers_ref'],
                    'volunteers_check' => $data['volunteers_check'],
                    'volunteers_date' => date("Y-m-d"),
            ];


            if (Mail::to('adefolarin2017@gmail.com')->send(new VolunteerMail($mailData))) {
                Volunteer::insert($store);
                return redirect('volunteer')->with('success_message', $message);
            }
            //return redirect('admin/event')->with('success_message', $message);


        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($volunteersid)
    {
        Volunteer::where('volunteers_id', $volunteersid)->delete();
        return redirect('admin/volunteer')->with('success_message', 'Volunteer deleted successfully');
    }


    /************************************
     * FRONT END
     ************************************/

     public function volunteerFront($volunteerid = null)
     {
         Session::put("page", "volunteers");
 
         if($volunteerid == null) {
           $volunteers = Volunteer::query()->get()->toArray(); 
           return view('volunteer')->with(compact('volunteers'));
         } else {
             $contactone = Volunteer::find($volunteerid);
             //$banner = Banner::where('banner_id',$bannerid);
             $contact = Volunteer::query()->get()->toArray(); 
            return view('volunteer')->with(compact('volunteers','volunteerone'));
     
         }
 
          
         //dd($CmsPages);
 
     }
}
