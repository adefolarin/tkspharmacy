<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\CampaignCategory;
use App\Models\CampaignScheduler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CampaignController extends Controller
{
            /**
     * Display a listing of the resource.
     */
    public function index($campaignsid = null)
    {
        Session::put("page", "campaigns");

        $campaigncategories = CampaignCategory::query()->get()->toArray();

        $campaigns = DB::table('campaigncategories')->orderByDesc('campaigns_id')->join('campaigns','campaigncategories.campaigncategories_id','=', 'campaigns.campaigncategoriesid')->select('campaigns.*','campaigncategories.campaigncategories_name')->get()->toArray();

        if($campaignsid == null) {
              
           return view('admin.campaign')->with(compact('campaigns','campaigncategories'));
           //dd($campaigns); die;
           //echo "<prev>"; print_r($campaigns); die;

        } else {
            $campaign = new Campaign;
            $campaigncategory = new CampaignCategory;
            $campaignone = $campaign->where('campaigns_id', $campaignsid)->first();

            $campaigncategoryone = $campaigncategory->where('campaigncategories_id', $campaignone['campaigncategoriesid'])->first(); 
            
            //dd($campaigncategoryone['campaigncategories_name']); die;
            //$campaigns = Campaign::query()->get()->toArray(); 
             return view('admin.campaign')->with(compact('campaigns','campaignone','campaigncategoryone','campaigncategories'));
        }


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

        $campaign = new Campaign;
    
        $message = "Medical Outreach added succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Campaign Category Vallidations

                $rules = [
                    'campaigncategoriesid' => 'required',
                    'campaigns_title' => 'required',
                    'campaigns_desc' => 'required',
                    'campaigns_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5240',
                    'campaigns_startdate' => 'required',
                    'campaigns_enddate' => 'required',
                    'campaigns_venue' => 'required',
                    'campaigns_address' => 'required',
                    'campaigns_organizer' => 'required',
                    'campaigns_preacher' => 'required',
                    
                ];
                $customMessages = [
                    'campaigncategoriesid.required' => 'Name of Medical Outreach Category is required',
                    'campaigns_title.required' => 'Name of Medical Outreach Title is required',
                    'campaigns_desc.required' => 'Name of Medical Outreach Description is required',
                    'campaigns_file.required' => 'Name of Medical Outreach File is required',
                    'campaigns_file.mimes' => "The Image format is not allowed",
                    'campaigns_file.max' => "Image upload size can't exceed 5MB",
                    'campaigns_startdate.required' => 'Name of Medical OutreachStart Date is required',
                    'campaigns_enddate.required' => 'Name of Medical Outreach End Date is required',
                    'campaigns_venue.required' => 'Name of Medical Outreach Venue is required',
                    'campaigns_address.required' => 'Name of Medical Outreach Address is required',
                    'campaigns_organizer.required' => 'Name of Medical Outreach Organizer is required',
                    'campaigns_preacher.required' => 'Name of Medical Outreach Preacher is required',
                ];
                     

               $this->validate($request,$rules,$customMessages);

               if($request->hasFile('campaigns_file')) {
                $image_tmp = $request->file('campaigns_file');
                if($image_tmp->isValid()) {
                $manager = new ImageManager(new Driver());
                $fileName = hexdec(uniqid()).'.'.$image_tmp->getClientOriginalExtension();
                $image = $manager->read($image_tmp);
                //$image = $image->resize(60,60);
    
                $storePath = 'admin/img/campaigns/';
                //$storePath = public_path('admin/img/campaigns/');
                //$image->toJpeg(80)->save($storePath . $imageName);
                $image->save($storePath . $fileName);
                      
                }
              } 

              $timestamp = strtotime($data['campaigns_startdate']);
              $campaigns_date = date("Y-m-d", $timestamp);

              $store = [
                [
                'campaigncategoriesid' => $data['campaigncategoriesid'],
                'campaigns_title' => $data['campaigns_title'],
                'campaigns_desc' => $data['campaigns_desc'],
                'campaigns_file' => $fileName,
                'campaigns_startdate' => $data['campaigns_startdate'],
                'campaigns_enddate' => $data['campaigns_enddate'],
                'campaigns_venue' => $data['campaigns_venue'],
                'campaigns_address' => $data['campaigns_address'],
                'campaigns_organizer' => $data['campaigns_organizer'],
                'campaigns_preacher' => $data['campaigns_preacher'],
                'campaigns_date' => $campaigns_date,

               ]
            ];

                $campaign->insert($store);
                return redirect('admin/campaign')->with('success_message', $message);
              

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
        //$campaigncategoryone = CampaignCategory::find($campaigncategoriesid);
        //$banner = Banner::where('banner_id',$bannerid);
        //return view('admin.campaigncategory')->with(compact('campaigncategoryone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $message = "Medical Outreach updated succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            //  Vallidations
            $rules = [
                'campaigncategoriesid' => 'required',
                'campaigns_title' => 'required',
                'campaigns_desc' => 'required',
                'campaigns_file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5240',
                'campaigns_startdate' => 'required',
                'campaigns_enddate' => 'required',
                'campaigns_venue' => 'required',
                'campaigns_address' => 'required',
                'campaigns_organizer' => 'required',
                'campaigns_preacher' => 'required',
            ];
            $customMessages = [
                'campaigncategoriesid.required' => 'Name of Medical Outreach Category is required',
                'campaigns_title.required' => 'Name of Medical Outreach Title is required',
                'campaigns_desc.required' => 'Name of Medical Outreach Description is required',
                'campaigns_file.mimes' => "The Image format is not allowed",
                'campaigns_file.max' => "Image upload size can't exceed 5MB",
                'campaigns_startdate.required' => 'Name of Medical Outreach Start Date is required',
                'campaigns_enddate.required' => 'Name of Medical Outreach End Date is required',
                'campaigns_venue.required' => 'Name of Medical Outreach Venue is required',
                'campaigns_address.required' => 'Name of Medical Outreach Address is required',
                'campaigns_organizer.required' => 'Name of Medical Outreach Organizer is required',
                'campaigns_preacher.required' => 'Name of Medical Outreach Preacher is required',
            ];

            $this->validate($request,$rules,$customMessages);

            if($request->hasFile('campaigns_file') && !empty($request->file('campaigns_file'))) {
                $image_tmp = $request->file('campaigns_file');
                if($image_tmp->isValid()) {
                $manager = new ImageManager(new Driver());
                $fileName = hexdec(uniqid()).'.'.$image_tmp->getClientOriginalExtension();
                $image = $manager->read($image_tmp);
                //$image = $image->resize(60,60);
    
                $storePath = 'admin/img/campaigns/';
                //$storePath = public_path('admin/img/campaigns/');
                //$image->toJpeg(80)->save($storePath . $imageName);
                $image->save($storePath . $fileName);
                            
                
                }
            } else {
                $fileName = $data['currentcampaigns_file'];
            }

              $timestamp = strtotime($data['campaigns_startdate']);
              $campaigns_date = date("Y-m-d", $timestamp);
              $store = [
            
                'campaigncategoriesid' => $data['campaigncategoriesid'],
                'campaigns_title' => $data['campaigns_title'],
                'campaigns_desc' => $data['campaigns_desc'],
                'campaigns_file' => $fileName,
                'campaigns_startdate' => $data['campaigns_startdate'],
                'campaigns_enddate' => $data['campaigns_enddate'],
                'campaigns_venue' => $data['campaigns_venue'],
                'campaigns_address' => $data['campaigns_address'],
                'campaigns_organizer' => $data['campaigns_organizer'],
                'campaigns_preacher' => $data['campaigns_preacher'],
                'campaigns_date' => $campaigns_date,
               
            ];

              Campaign::where('campaigns_id',$data['campaigns_id'])->update($store);
              return redirect('admin/campaign/'.$data['campaigns_id'])->with('success_message', $message);

          }   
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($campaignsid)
    {
        Campaign::where('campaigns_id',$campaignsid)->delete();
        return redirect('admin/campaign')->with('success_message', 'Medical Outreach deleted successfully');
    }


    public function updateCampaignFile(Request $request) {
        $message = "Banner File changed succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Banner Vallidations

                $rules = [
                'campaigns_file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
                ];
                 
                $customMessages = [
                    'campaigns_file.required' => 'Campaign File is required',
                    'campaigns_file.mimes' => "The Image format is not allowed",
                    'campaigns_file.max' => "Image upload size can't exceed 10MB",
                ];
                   
            $this->validate($request,$rules,$customMessages);

                if($request->hasFile('campaigns_file')) {
                    $image_tmp = $request->file('campaigns_file');
                    if($image_tmp->isValid()) {
                    $manager = new ImageManager(new Driver());
                    $fileName = hexdec(uniqid()).'.'.$image_tmp->getClientOriginalExtension();
                    $image = $manager->read($image_tmp);
                    //$image = $image->resize(60,60);
        
                    $storePath = 'admin/img/campaigns/';
                    //$image->toJpeg(80)->save($storePath . $imageName);
                    $image->save($storePath . $fileName);
                    
                    
                    
                    }
                } 

              $store = [
                'campaigns_file' => $fileName,
                'campaigns_date' => date('Y-m-d'),
               
            ];

            Campaign::where('campaigns_id',$data['campaigns_id'])->update($store);
            return redirect('admin/campaign/'.$data['campaigns_id'])->with('success_message', $message);

         }
    }


    // Front End

    public function frontCampaign($campaignsid = null)
    {
        Session::put("page", "campaigns");

        $campaigncategories = CampaignCategory::query()->get()->toArray();

        $campaigns = DB::table('campaigncategories')->orderByDesc('campaigns_id')->join('campaigns','campaigncategories.campaigncategories_id','=', 'campaigns.campaigncategoriesid')->select('campaigns.*','campaigncategories.campaigncategories_name')->get()->toArray();

        if($campaignsid == null) {
              
           return view('campaign')->with(compact('campaigns','campaigncategories'));
           //dd($campaigns); die;
           //echo "<prev>"; print_r($campaigns); die;

        } else {
            $campaign = new Campaign;
            $campaigncategory = new CampaignCategory;
            $campaignone = $campaign->where('campaigns_id', $campaignsid)->first();

            $campaigncategoryone = $campaigncategory->where('campaigncategories_id', $campaignone['campaigncategoriesid'])->first(); 

            $campaignschedulers = EventScheduler::query()->get()->toArray(); 
            
            //dd($campaigncategoryone['campaigncategories_name']); die;
            //$campaigns = Campaign::query()->get()->toArray(); 
             return view('campaign-detail')->with(compact('campaigns','campaignone','campaigncategoryone','campaigncategories', 'campaignschedulers'));
        }


    }

    public function upcomingCampaign()
    {
        //Session::put("page", "campaigns");

        $campaigncategories = CampaignCategory::query()->get()->toArray();

        $campaigns = DB::table('campaigncategories')->orderByDesc('campaigns_id')->join('campaigns','campaigncategories.campaigncategories_id','=', 'campaigns.campaigncategoriesid')->select('campaigns.*','campaigncategories.campaigncategories_name')->get()->toArray();
              

              
            return view('campaign-upcoming')->with(compact('campaigns','campaigncategories'));
            //dd($campaigns); die;
            //echo "<prev>"; print_r($campaigns); die;



    }

    public function detailCampaign($campaignsid)
    {
        //Session::put("page", "campaigns");

        $campaigncategories = CampaignCategory::query()->get()->toArray();

        $campaigns = DB::table('campaigncategories')->orderByDesc('campaigns_id')->join('campaigns','campaigncategories.campaigncategories_id','=', 'campaigns.campaigncategoriesid')->select('campaigns.*','campaigncategories.campaigncategories_name')->get()->toArray();
              
 
             $campaign = new Campaign;
             $campaigncategory = new CampaignCategory;
             $campaignone = $campaign->where('campaigns_id', $campaignsid)->first();
 
             $campaigncategoryone = $campaigncategory->where('campaigncategories_id', $campaignone['campaigncategoriesid'])->first(); 
             
             //dd($campaigncategoryone['campaigncategories_name']); die;
             //$campaigns = Campaign::query()->get()->toArray(); 
              return view('campaign-detail')->with(compact('campaigns','campaignone','campaigncategoryone','campaigncategories'));
         


    }

}
