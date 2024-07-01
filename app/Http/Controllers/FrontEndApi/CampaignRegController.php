<?php

namespace App\Http\Controllers\FrontEndApi;

use App\Http\Controllers\Controller;
use App\Models\CampaignReg;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\CampaignRegMail;

class CampaignRegController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index($campaignregsid = null)
    {
        Session::put("page", "campaignregs");

        if($campaignregsid == null) {
          $campaignregs = CampaignReg::query()->get()->toArray(); 
          return view('admin.campaignreg')->with(compact('campaignregs'));
        } else {
            $campaignregsone = CampaignReg::find($campaignregsid);
            //$banner = Banner::where('banner_id',$bannerid);
            $campaignregs = CampaignReg::query()->get()->toArray(); 
           return view('admin.campaignregs')->with(compact('campaignregs','campaignregsone'));
    
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

        $campaignreg = new CampaignReg;
    
        $message = "Registration Succesfull";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Campaign Category Vallidations

               /* $rules = [
                    'campaignregs_campaign' => 'required',
                    'campaignregs_name' => 'required',
                    'campaignregs_email' => 'required',
                    'campaignregs_pnum' => 'required',
                    
                ];
                $customMessages = [
                    'campaignregs_campaign.required' => 'Campaign ID is required',
                    'campaignregs_name.required' => 'Name is required',
                    'campaignregs_email.required' => 'Email is required',
                    'campaignregs_pnum.required' => 'Phone Number is required',
                ];
                     

               $this->validate($request,$rules,$customMessages);*/
  

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
                'campaignregs_date' => date("Y-m-d"),

               ]
            ];

               $mailData = [
                'title' => 'Mail from ' . $data['campaignregs_name'],
                'campaignname' => $campaignone->campaigns_title,
                'body' => 'The above person has registered for the campaign.'
               ];

              
                if(Mail::to('adefolarin2017@gmail.com')->send(new CampaignRegMail($mailData))) {
                    $campaignreg->insert($store);
                }
                return response()->json(['status' => true, 'message' => $message], 201);
                //return redirect('admin/campaign')->with('success_message', $message);
              

          }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($campaigncategoriesid)
    {
        //$campaigncategoryone = CampaignRegCategory::find($campaigncategoriesid);
        //$banner = Banner::where('banner_id',$bannerid);
        //return view('admin.campaigncategory')->with(compact('campaigncategoryone'));
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
    public function destroy($campaignregsid,$campaignregs_campaign)
    {
        CampaignReg::where('campaignregs_id',$campaignregsid)->delete();
        return redirect('admin/campaignreg/' . $campaignregs_campaign)->with('success_message', 'Campaign Participant deleted successfully');
    }
}
