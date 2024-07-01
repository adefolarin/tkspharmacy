<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CampaignCategory;
use App\Models\Campaign;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CampaignCategoryController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index($campaigncategoriesid = null)
    {
        Session::put("page", "campaigncategory");
   
         //echo "<prev>"; print_r($campaigns); die;

        if($campaigncategoriesid == null) {
          $campaigncategories = CampaignCategory::query()->get()->toArray(); 
          return view('admin.campaigncategory')->with(compact('campaigncategories'));
        } else {
            $campaigncategoryone = CampaignCategory::find($campaigncategoriesid);
            //$banner = Banner::where('banner_id',$bannerid);
            $campaigncategories = CampaignCategory::query()->get()->toArray(); 
           return view('admin.campaigncategory')->with(compact('campaigncategories','campaigncategoryone'));
    
        }

         
        //dd($CmsPages);

    }

    public static function showCampaignCategoriesID($campaigncategoriesid) {

        return DB::table('campaigncategories')->where('campaigncategories_id',$campaigncategoriesid)->join('campaigns','campaigncategories.campaigncategories_id','=', 'campaigns.campaigncategoriesid')->select('campaigns.*','campaigncategories.campaigncategories_name')->first();
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
        $campaigncategory = new CampaignCategory;
    
        $message = "Medical Outreach Category added succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Campaign Category Vallidations

                $rules = [
                    'campaigncategories_name' => 'required',
                ];
                $customMessages = [
                    'campaigncategories_name.required' => 'Name of Medical Outreach Category is required',
                ];
                     

            $this->validate($request,$rules,$customMessages);

              $store = [
                [
                'campaigncategories_name' => $data['campaigncategories_name'],
               ]
            ];

              //$campaigncategoryone = CampaignCategory::find($data['campaigncategories_name']);
              //$campaigncategoryone = $campaigncategory->where('campaigncategories_name', '=', $data['campaigncategories_name'])->first();                           
        
               //echo "<prev>"; print_r($campaigncategoryone['campaigncategories_name']); die;


              if (CampaignCategory::where('campaigncategories_name', $data['campaigncategories_name'])->exists()) {
                return redirect('admin/campaigncategory')->with('error_message', 'Medical OutreachCategory Name Already Exists');
              } else {
                $campaigncategory->insert($store);
                return redirect('admin/campaigncategory')->with('success_message', $message);
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
        $message = "Medical OutreachCategory updated succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Banner Vallidations
                $rules = [
                'campaigncategories_name' => 'required',
                ];
            
            $customMessages = [
                'campaigncategories_name.required' => 'Name of Medical Outreach Category is required',
            ];

            $this->validate($request,$rules,$customMessages);

              $store = [
            
                'campaigncategories_name' => $data['campaigncategories_name'],
               
            ];

            if (CampaignCategory::where('campaigncategories_name', $data['campaigncategories_name'])->exists()) {
                return redirect('admin/campaigncategory/'.$data['campaigncategories_id'])->with('error_message', 'Medical Outreach Category Name Already Exists');
            }
            else {
              CampaignCategory::where('campaigncategories_id',$data['campaigncategories_id'])->update($store);
              return redirect('admin/campaigncategory/'.$data['campaigncategories_id'])->with('success_message', $message);
            }

          }   
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($campaigncategories_id)
    
    {

        if(DB::table('campaigns')->where('campaigncategoriesid', $campaigncategories_id)->doesntExist()) {

            CampaignCategory::where('campaigncategories_id',$campaigncategories_id)->delete();
            return redirect('admin/campaigncategory')->with('success_message', 'Medical OutreachCategory deleted successfully');
        }
         
        else if(DB::table('campaigns')->where('campaigncategoriesid', $campaigncategories_id)->exists()) {

            return redirect('admin/campaigncategory')->with('error_message', "You cannot delete a category that has data connected to it"); 
        }

    }
}
