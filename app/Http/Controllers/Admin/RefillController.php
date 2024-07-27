<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
//use App\Models\Refill;
use Intervention\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\RefillMail;
use Barryvdh\DomPDF\Facade\Pdf;
use HalilCosdu\SignalWire\Facades\SignalWire;

class RefillController extends Controller
{ 
    //
    public function index() {
     //echo "<prev>"; print_r(Auth::guard('admin')->user()); die;
     //return view('admin.login');

    }


    /********************************
       FAX API
    ****************************** */


    public function sendRefill(Request $request)
    {
        //$refill = new Refill;
    
        $message = "Refill Successful";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;


                $rules = [
                    'refills_name' => 'required',
                    'refills_pnum' => 'required',
                    'refills_dob' => 'required',
                    'refills_rxnum' => 'required',
                ];
                $customMessages = [
                    'refills_name.required' => 'Name of Patient is required',
                    'refills_pnum.required' => 'Phone Number is required',
                    'refills_dob.required' => 'Date of Birth is required',
                    'refills_rxnum.required' => 'RX number is required',
                ];
                     

            $this->validate($request,$rules,$customMessages);

             $store = [
                [
                'refills_name' => $data['refills_name'],
                'refills_pnum' => $data['refills_pnum'],
                'refills_dob' => $data['refills_dob'],
                'refills_rxnum' => $data['refills_rxnum'],
               ]
            ];

            $mailData = [
                'title' => 'Mail from ' . $data['refills_name'],
                'refills_name' => $data['refills_name'],
                'refills_pnum' => $data['refills_pnum'],
                'refills_dob' => $data['refills_dob'],
                'refills_rxnum' => $data['refills_rxnum'],
            ];

            $pdf = PDF::loadView('pdf/refillpdf', [
                'name' => $data['refills_name'],
                'pnum' => $data['refills_pnum'],
                'dob' => $data['refills_dob'],
                'rxnum' => $data['refills_rxnum'],
                // ... and more data if you like
            ]);
        
            //return $pdf->download('refill.pdf');
            $pdf->save('admin/docs/refill.pdf');

            // Send Fax
            SignalWire::sendFax('http://localhost/projects/tkspharmacy/admin/docs/refill.pdf', 
            '+17205830326', '+12015027572', 'standard');



        if(Mail::to('adefolarin2017@gmail.com')->send(new RefillMail($mailData))) {
            Refill::insert($store);
            return redirect('refill')->with('success_message', $message);
        }

            

      }
    }


  

}

