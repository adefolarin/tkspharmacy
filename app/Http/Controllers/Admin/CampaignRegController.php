<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CampaignReg;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\CampaignRegMail;
use App\Mail\CampaignRegMailUser;

class CampaignRegController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index($campaignregs_campaign)
    {
        Session::put("page", "campaignregs");

          $campaignregsnumrw = CampaignReg::query()->count(); 
          if($campaignregsnumrw > 0) {
            $campaignone = Campaign::find($campaignregs_campaign);
            $campaignregs = CampaignReg::query()
            ->where('campaignregs_campaign',$campaignregs_campaign)
            ->get()
            ->toArray(); 
            return view('admin.campaignreg')->with(compact('campaignregs','campaignone'));
          }


    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($campaignregsid,$campaignregs_campaign)
    {
        CampaignReg::where('campaignregs_id',$campaignregsid)->delete();
        return redirect('admin/campaignreg/' . $campaignregs_campaign)->with('success_message', 'Campaign Participant deleted successfully');
    }


    /**********************************************
       FRONT END
    **********************************************/

        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campaignreg = new CampaignReg;
    
        $message = "Registration Succesfull";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Campaign Category Vallidations

                $rules = [
                    'campaignregs_campaign' => 'required',
                    'campaignregs_name' => 'required',
                    'campaignregs_email' => 'required',
                    'campaignregs_pnum' => 'required',
                    'campaignregs_availtime' => 'required',
                    
                ];
                $customMessages = [
                    'campaignregs_campaign.required' => 'Campaign ID is required',
                    'campaignregs_name.required' => 'Name is required',
                    'campaignregs_email.required' => 'Email is required',
                    'campaignregs_pnum.required' => 'Phone Number is required',
                    'campaignregs_availtime.required' => 'Time of Availability is required',
                ];
                     

               $this->validate($request,$rules,$customMessages);
  

               $campaign = new Campaign;
               //$campaigncategory = new CampaignCategory;
               //$campaignonenumrw = $campaign->where('campaigns_id', $data['campaignregs_campaign'])->count();
   
               //if($campaignonenumrw > 0) {
                 $campaignone = $campaign->where('campaigns_id', $data['campaignregs_campaign'])->first();
               //}
            

              $store = [
                [
                'campaignregs_campaign' => $data['campaignregs_campaign'],
                'campaignregs_name' => $data['campaignregs_name'],
                'campaignregs_email' => $data['campaignregs_email'],
                'campaignregs_pnum' => $data['campaignregs_pnum'],
                'campaignregs_availtime' => $data['campaignregs_availtime'],
                'campaignregs_date' => date("Y-m-d"),

               ]
            ];

               $mailData = [
                'title' => 'Mail from ' . $data['campaignregs_name'],
                'campaignname' => $campaignone->campaigns_title,
                'body' => 'The above person has registered for the campaign.'
               ];

               $mailData2 = [
                'title' => 'Medical Outreach Registration',
                'name' => $data['eventregs_name'],
                'campaignname' => $campaignone->campaigns_title,
                'campaigndate' => $campaignone->campaigns_date,
                'campaignavailtime' => $data['campaignregs_availtime'],
                'body' => 'You have successfully registered for the above medical outreach.'
               ];


              
                if(Mail::to('adefolarin2017@gmail.com')->send(new CampaignRegMail($mailData))) {
                    Mail::to($data['campaignregs_email'])->send(new CampaignRegMailUser($mailData2));
                    $campaignreg->insert($store);
                }
                return redirect('campaign/'.$data['campaignregs_campaign'])->with('success_message', $message);
              

          }
    }
}
