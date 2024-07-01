<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use App\Models\Sponsor;
use App\Models\ResourceCategory;
use App\Models\Donation;
use Illuminate\Support\Facades\DB;
use Intervention\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Session;

class SponsorController extends Controller
{ 
    //
    public function showCreate() {
      //echo "<prev>"; print_r(Auth::guard('sponsor')->user()); die;
      return view('sponsorcreate');
 
     }


    public function showLogin() {
     //echo "<prev>"; print_r(Auth::guard('sponsor')->user()); die;
     return view('sponsorlogin');

    }

    public function sponsorBack($sponsorsid = null)
    {
        Session::put("page", "sponsors");

        if($sponsorsid == null) {
          $sponsors = Sponsor::query()->get()->toArray(); 
          return view('admin.sponsor')->with(compact('sponsors'));
        } else {
            $sponsorone = Sponsor::find($sponsorsid);
            //$banner = Banner::where('banner_id',$bannerid);
            $sponsor = Sponsor::query()->get()->toArray(); 
           return view('admin.sponsor')->with(compact('sponsors','sponsorone'));
    
        }

    }

  public function sponsorFront()
  {
        //Session::put("page", "sponsors");

   
        //$sponsorone =  Sponsor::where('sponsors_id', $sponsorsid)->first(); 
        return view('sponsordashboard');
  

   }

   public function sponsorUpdate()
   {
         //Session::put("page", "sponsors");
 
    
         //$sponsorone =  Sponsor::where('sponsors_id', $sponsorsid)->first(); 
         return view('sponsorupdate');
   
 
  }

  public function sponsorResource()
    {
        Session::put("page", "resources");

        $resourcecategories = ResourceCategory::query()->get()->toArray();

        $resources = DB::table('resourcecategories')->where('resources_for','sponsor')->orderByDesc('resources_id')->join('resources','resourcecategories.resourcecategories_id','=', 'resources.resourcecategoriesid')->select('resources.*','resourcecategories.resourcecategories_name')->get()->toArray();

        $reports = DB::table('resourcecategories')->orderByDesc('reports_id')->join('reports','resourcecategories.resourcecategories_id','=', 'reports.resourcecategoriesid')->select('reports.*','resourcecategories.resourcecategories_name')->get()->toArray();
              
           return view('sponsorresource')->with(compact('resources','resourcecategories'));
           //dd($resources); die;
           //echo "<prev>"; print_r($resources); die;

    }

    public function sponsorReport()
    {
        Session::put("page", "reports");

        $resourcecategories = ResourceCategory::query()->get()->toArray();


        $reports = DB::table('resourcecategories')->where('reports_for','sponsor')->orderByDesc('reports_id')->join('reports','resourcecategories.resourcecategories_id','=', 'reports.resourcecategoriesid')->select('reports.*','resourcecategories.resourcecategories_name')->get()->toArray();
              
           return view('sponsorreport')->with(compact('reports','resourcecategories'));
           //dd($resources); die;
           //echo "<prev>"; print_r($resources); die;

    }

    public function sponsorPayment()
    {
        Session::put("page", "donations");

          $donations = Donation::query()
          ->where('donations_email', Auth::guard('sponsor')->user()->sponsors_email)
          ->where('donations_type', 'Sponsor')
          ->get()->toArray(); 
          return view('sponsorpayment')->with(compact('donations'));
         
        //dd($CmsPages);

    }

    public function storeCreate(Request $request) {
        Session::put('page', 'sponsorcreate');
  
        if($request->isMethod('post')) {
          $data = $request->all();
          //echo "<prev>"; print_r($data); die;
  
          $rules = [
            'sponsors_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'sponsors_profession' => 'required',
            'sponsors_type' => 'required',
            'sponsors_period' => 'required',
            'sponsors_amount' => 'required',
            'sponsors_email' => 'required|email|max:255',
            'sponsors_password' => 'required|max:30'
          ];
  
          $customMessages = [
            'sponsors_name.required' => 'Name is required',
            'sponsors_name.regex' => 'Name is not valid',
            'sponsors_profession.required' => 'Profession is required',
            'sponsors_type.required' => 'Sponsor Type is required',
            'sponsors_period.required' => 'Period is required',
            'sponsors_amount.required' => 'Amount is required',
            'sponsors_email.required' => 'Email is required',
            'sponsors_email.email' => 'Valid Email is required',
            'sponsors_password.required' => 'Password is required',
  
          ];
  
          $this->validate($request,$rules,$customMessages);

          $store = [
            [
                'sponsors_email' => $data['sponsors_email'], 
                'sponsors_name' => $data['sponsors_name'], 
                'sponsors_profession' => $data['sponsors_profession'],
                'sponsors_type' => $data['sponsors_type'],
                'sponsors_period' => $data['sponsors_period'],
                'sponsors_amount' => $data['sponsors_amount'],
                'created_at' => date('Y-m-d'),
                'sponsors_password' => bcrypt($data['sponsors_password']),
                
            ]
        ];
  
  
          if($data['sponsors_password'] != $data['sponsors_cpassword']) {
            return redirect()->forward()->with('error_message', 'Passwords must match');  
          }  elseif (Sponsor::where('sponsors_email', $data['sponsors_email'])->exists()) {
            return redirect()->back()->with('error_message', 'Email Already Exists'); 
          } else {
            Sponsor::insert($store);
            //return view('sponsorlogin')->with('success_message', 'You have resgistered successfully.Please Login'); 
            return redirect()->to('/sponsorlogin')->with('success_message', 'You have resgistered successfully.Please Login');
          }
         }
  
        }


    public function fetchLogin(Request $request ) {
        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            $rules = [
              'sponsors_email' => 'required|email|max:255',
              'sponsors_password' => 'required|max:30'
            ];

            $customMessages = [
              'sponsors_email.required' => 'Email is required',
              'sponsors_email.email' => 'Valid Email is required',
              'sponsors_password.required' => 'Password is required',
            ];

            $this->validate($request,$rules,$customMessages);

            //$sponsorone =  Sponsor::where('sponsors_email', $data['sponsors_email'])->first();

            if(Auth::guard('sponsor')->attempt(['sponsors_email'=>$data['sponsors_email'],'password'=>$data['sponsors_password']])) {
              //Session::regenerate();
               return redirect('sponsor'); 
               //echo "<prev>"; print_r(Auth::guard('sponsor')->user()->sponsors_id); die;
            } else {
               return redirect()->back()->with("error_message", "Invalid Email or Password");
            }
        }
        return view('sponsorlogin');
    }

    public function logout() {
      //Session::flush();
      //Session::regenerateToken();
      //Session::forget();
      Auth::guard('sponsor')->logout();
      return redirect('sponsorlogin');
    }

    public function updatePassword(Request $request) {
      Session::put('page', 'sponsorupdates');
      if($request->isMethod('post')) {
        $data = $request->all();
        // check if current password is correct
        if(Hash::check($data['current_pwd'],Auth::guard('sponsor')->user()->sponsors_password)) {
          // Check if new password and confirm password match
          if($data['sponsors_password'] == $data['sponsors_cpassword']) {
            // Update New Password
            Sponsor::where('sponsors_id',Auth::guard('sponsor')->user()->sponsors_id)->update(['sponsors_password' => bcrypt($data['sponsors_password'])]);
            return redirect()->back()->with('success_message', 'Password Updated Succesfully');
          } else {
            return redirect()->back()->with('error_message', 'New Password and Confirm Password Do Not Match');
          }

        } else {
           return redirect()->back()->with('error_message', 'Your current password is Incorrect!');
        }
      }

        return view('sponsorupdate');
    }

    public function checkCurrentPassword(Request $request) {
        $data = $request->all();
        if(Hash::check($data['current_pwd'],Auth::guard('sponsor')->user()->password)) {
          return "true";
        } else {
          return "false";
        }
    }


    public function updateEmail(Request $request) {
        Session::put('page', 'sponsorupdate');
        if($request->isMethod('post')) {
          $data = $request->all();
   
            if($data['sponsors_email'] != Auth::guard('sponsor')->user()->sponsors_email) {
              // Update New Password
              Sponsor::where('sponsors_id',Auth::guard('sponsor')->user()->sponsors_id)->update(['sponsors_email' => $data['sponsors_email']]);
              return redirect()->back()->with('success_message', 'Email Updated Succesfully');
            } else {
              return redirect()->back()->with('error_message', 'Email Already Exixts');
            }
  
          }
        
  
          return view('sponsorupdate');
       }
      

    public function updateSponsorDetails(Request $request) {
      Session::put('page', 'sponsorupdate');

      if($request->isMethod('post')) {
        $data = $request->all();
        //echo "<prev>"; print_r($data); die;

        $rules = [
          'sponsors_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
          'sponsors_profession' => 'required',
          'sponsors_type' => 'required',
          'sponsors_period' => 'required',
          'sponsors_amount' => 'required',
        ];

        $customMessages = [
          'sponsors_name.required' => 'Name is required',
          'sponsors_name.regex' => 'Name is not valid',
          'sponsors_profession.required' => 'Profession is required',
          'sponsors_type.required' => 'Sponsor Type is required',
          'sponsors_period.required' => 'Period is required',
          'sponsors_amount.required' => 'Amount is required',

        ];

        $this->validate($request,$rules,$customMessages);


        // Update Sponsor Details

        Sponsor::where('sponsors_email',Auth::guard('sponsor')->user()->sponsors_email)->update(
        [
        'sponsors_name' => $data['sponsors_name'], 
        'sponsors_profession' => $data['sponsors_profession'],
        'sponsors_type' => $data['sponsors_type'],
        'sponsors_period' => $data['sponsors_period'],
        'sponsors_amount' => $data['sponsors_amount'],
        ]
        );

        return redirect()->back()->with('success_message', 'Details Updated Succesfully');
       }

      return view('sponsorupdate');
      }

  

}

