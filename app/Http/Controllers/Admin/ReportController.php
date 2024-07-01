<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\ResourceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ReportController extends Controller
{
            /**
     * Display a listing of the report.
     */
    public function index($reportsid = null)
    {
        Session::put("page", "reports");

        $resourcecategories = ResourceCategory::query()->get()->toArray();

        $reports = DB::table('resourcecategories')->orderByDesc('reports_id')->join('reports','resourcecategories.resourcecategories_id','=', 'reports.resourcecategoriesid')->select('reports.*','resourcecategories.resourcecategories_name')->get()->toArray();

        if($reportsid == null) {
              
           return view('admin.report')->with(compact('reports','resourcecategories'));
           //dd($reports); die;
           //echo "<prev>"; print_r($reports); die;

        } else {
            $report = new Report;
            $resourcecategory = new ResourceCategory;
            $reportone = $report->where('reports_id', $reportsid)->first();

            $resourcecategoryone = $resourcecategory->where('resourcecategories_id', $reportone['resourcecategoriesid'])->first(); 
            
            //dd($resourcecategoryone['resourcecategories_name']); die;
            //$reports = Report::query()->get()->toArray(); 
             return view('admin.report')->with(compact('reports','reportone','resourcecategoryone','resourcecategories'));
        }


    }

    /**
     * Show the form for creating a new report.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created report in storage.
     */
    public function store(Request $request)
    {

        $report = new Report;
    
        $message = "Report added succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Report Category Vallidations

   
                $rules = [
                    'resourcecategoriesid' => 'required',
                    'reports_for' => 'required',
                    'reports_name' => 'required',
                    'reports_file' => 'required|max:50240',
                    
                ];
             
                $customMessages = [
                    'resourcecategoriesid.required' => 'Name of Report Category is required',
                    'reports_name.required' => 'Report Title is required',
                    'reports_for.required' => 'Report Access is required',
                    'reports_file.required' => 'The Report File is required',
                    //'reports_file.mimes' => "The File format is not allowed",
                    'reports_file.max' => "Upload size can't exceed 50MB",
                ];
                     

               $this->validate($request,$rules,$customMessages);

                if ($request->hasFile('reports_file')) {
                    $docFile = $request->file('reports_file');
                    $fileName = time() . '.' . $docFile->getClientOriginalExtension();
                    // Move the uploaded file to the storage directory
                    //$videoFile->storeAs('public/admin/videos/banners', $fileName);
                    $docFile->storeAs('public/admin/docs/reports', $fileName);
                    //$videoFile->store()
                 }
              

              $store = [
                [
                'resourcecategoriesid' => $data['resourcecategoriesid'],
                'reports_for' => $data['reports_for'],
                'reports_name' => $data['reports_name'],
                'reports_file' => $fileName,
                'reports_date' => date("Y-m-d"),

               ]
            ];

                $report->insert($store);
                return redirect('admin/report')->with('success_message', $message);
              

          }
    }

    /**
     * Display the specified report.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified report.
     */
    public function edit($resourcecategoriesid)
    {
        //$resourcecategoryone = ResourceCategory::find($resourcecategoriesid);
        //$banner = Banner::where('banner_id',$bannerid);
        //return view('admin.resourcecategory')->with(compact('resourcecategoryone'));
    }

    /**
     * Update the specified report in storage.
     */
    public function update(Request $request)
    {
        $message = "Report updated succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;
    

                $rules = [
                    'resourcecategoriesid' => 'required',
                    'reports_for' => 'required',
                    'reports_name' => 'required',
                    'reports_file' => 'max:50240',
                    
                ];
               
                $customMessages = [
                    'resourcecategoriesid.required' => 'Name of Report Category is required',
                    'reports_name.required' => 'Report Title is required',
                    'reports_for.required' => 'Report Access is required',
                    //'reports_file.required' => 'The Report File is required',
                    //'reports_file.mimes' => "The File format is not allowed",
                    'reports_file.max' => "Upload size can't exceed 50MB",
                ];
                     

            $this->validate($request,$rules,$customMessages);

 
                if($request->hasFile('reports_file') && !empty($request->file('reports_file'))) {

                    $docFile = $request->file('reports_file');
                    $fileName = time() . '.' . $docFile->getClientOriginalExtension();
                    // Move the uploaded file to the storage directory
                    //$videoFile->storeAs('public/admin/videos/banners', $fileName);
                    $docFile->storeAs('public/admin/docs/reports', $fileName);
                    //$videoFile->store()
                } else {
                    $fileName = $data['currentreports_file'];
                }
        

              $store = [
            
                'resourcecategoriesid' => $data['resourcecategoriesid'],
                'reports_for' => $data['reports_for'],
                'reports_name' => $data['reports_name'],
                'reports_file' => $fileName,
                'reports_date' => date("Y-m-d"),
               
            ];

              Report::where('reports_id',$data['reports_id'])->update($store);
              return redirect('admin/report/'.$data['reports_id'])->with('success_message', $message);

          }   
    }


    /**
     * Remove the specified report from storage.
     */
    public function destroy($reportsid)
    {
        Report::where('reports_id',$reportsid)->delete();
        return redirect('admin/report')->with('success_message', 'Report deleted successfully');
    }

 
    /******************************************* *
     * FRONT END
    **********************************************/
    public function resourceFront($reportsid = null)
    {
        Session::put("page", "reports");

        $resourcecategories = ResourceCategory::query()->get()->toArray();

        $reports = DB::table('resourcecategories')->orderByDesc('reports_id')->join('reports','resourcecategories.resourcecategories_id','=', 'reports.resourcecategoriesid')->select('reports.*','resourcecategories.resourcecategories_name')->get()->toArray();

        if($reportsid == null) {
              
           return view('report')->with(compact('reports','resourcecategories'));
           //dd($reports); die;
           //echo "<prev>"; print_r($reports); die;

        } else {
            $report = new Report;
            $resourcecategory = new ResourceCategory;
            $reportone = $report->where('reports_id', $reportsid)->first();

            $resourcecategoryone = $resourcecategory->where('resourcecategories_id', $reportone['resourcecategoriesid'])->first(); 
            
            //dd($resourcecategoryone['resourcecategories_name']); die;
            //$reports = Report::query()->get()->toArray(); 
             return view('report')->with(compact('reports','reportone','resourcecategoryone','resourcecategories'));
        }


    }


 

}
