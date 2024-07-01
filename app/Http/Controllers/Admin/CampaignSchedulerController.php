<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CampaignScheduler;
use App\Models\Campaign;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CampaignSchedulerController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index($campaignschedulersid = null)
    {
        Session::put("page", "campaignscheduler");
   
         //echo "<prev>"; print_r($campaigns); die;

        if($campaignschedulersid == null) {
          $campaignschedulers = CampaignScheduler::query()->get()->toArray(); 
          return view('admin.campaignscheduler')->with(compact('campaignschedulers'));
        } else {
            $campaignschedulerone = CampaignScheduler::find($campaignschedulersid);
            //$banner = Banner::where('banner_id',$bannerid);
            $campaignschedulers = CampaignScheduler::query()->get()->toArray(); 
           return view('admin.campaignscheduler')->with(compact('campaignschedulers','campaignschedulerone'));
    
        }

         
        //dd($CmsPages);

    }

    public static function showCampaignSchedulersID($campaignschedulersid) {

        return DB::table('campaignschedulers')->where('campaignschedulers_id',$campaignschedulersid)->join('campaigns','campaignschedulers.campaignschedulers_id','=', 'campaigns.campaignschedulersid')->select('campaigns.*','campaignschedulers.campaignschedulers_time')->first();
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
        //$title = "Banner";
        $campaignscheduler = new CampaignScheduler;
    
        $message = "Campaign Scheduler added succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Campaign Scheduler Vallidations

                $rules = [
                    'campaignschedulers_time' => 'required',
                ];
                $customMessages = [
                    'campaignschedulers_time.required' => 'Time of Campaign Scheduler is required',
                ];
                     

            $this->validate($request,$rules,$customMessages);

              $store = [
                [
                'campaignschedulers_time' => $data['campaignschedulers_time'],
               ]
            ];

              //$campaignschedulerone = CampaignScheduler::find($data['campaignschedulers_time']);
              //$campaignschedulerone = $campaignscheduler->where('campaignschedulers_time', '=', $data['campaignschedulers_time'])->first();                           
        
               //echo "<prev>"; print_r($campaignschedulerone['campaignschedulers_time']); die;


              if (CampaignScheduler::where('campaignschedulers_time', $data['campaignschedulers_time'])->exists()) {
                return redirect('admin/campaignscheduler')->with('error_message', 'Campaign Scheduler Time Already Exists');
              } else {
                $campaignscheduler->insert($store);
                return redirect('admin/campaignscheduler')->with('success_message', $message);
              }

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
    public function edit($campaignschedulersid)
    {
        //$campaignschedulerone = CampaignScheduler::find($campaignschedulersid);
        //$banner = Banner::where('banner_id',$bannerid);
        //return view('admin.campaignscheduler')->with(compact('campaignschedulerone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $message = "Campaign Scheduler updated succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Banner Vallidations
                $rules = [
                'campaignschedulers_time' => 'required',
                ];
            
            $customMessages = [
                'campaignschedulers_time.required' => 'Time of Campaign Scheduler is required',
            ];

            $this->validate($request,$rules,$customMessages);

              $store = [
            
                'campaignschedulers_time' => $data['campaignschedulers_time'],
               
            ];

            if (CampaignScheduler::where('campaignschedulers_time', $data['campaignschedulers_time'])->exists()) {
                return redirect('admin/campaignscheduler/'.$data['campaignschedulers_id'])->with('error_message', 'Campaign Scheduler Time Already Exists');
            }
            else {
              CampaignScheduler::where('campaignschedulers_id',$data['campaignschedulers_id'])->update($store);
              return redirect('admin/campaignscheduler/'.$data['campaignschedulers_id'])->with('success_message', $message);
            }

          }   
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($campaignschedulers_id)
    
    {

        CampaignScheduler::where('campaignschedulers_id',$campaignschedulers_id)->delete();
        return redirect('admin/campaignscheduler')->with('success_message', 'Campaign Scheduler deleted successfully');
         


    }
}
