<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use App\Models\Refill;
use Intervention\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\RefillMail;
use Barryvdh\DomPDF\Facade\Pdf;
use HalilCosdu\SignalWire\Facades\SignalWire;

require './././././vendor/autoload.php';

use SignalWire\Rest\Client;

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
                    'refills_mod' => 'required',
                    'refills_lod' => 'required',
                ];
                $customMessages = [
                    'refills_name.required' => 'Name of Patient is required',
                    'refills_pnum.required' => 'Phone Number is required',
                    'refills_dob.required' => 'Date of Birth is required',
                    'refills_rxnum.required' => 'RX number is required',
                    'refills_mod.required' => 'Mode of Delivery is required',
                    'refills_lod.required' => 'Location of Delivery is required',
                ];
                     

            $this->validate($request,$rules,$customMessages);

            $refillsid = rand(100000000000,999999999999);

             $store = [
                [
                'refills_name' => $data['refills_name'],
                'refills_pnum' => $data['refills_pnum'],
                'refills_dob' => $data['refills_dob'],
                'refills_rxnum' => $data['refills_rxnum'],
                'refills_mod' => $data['refills_mod'],
                'refills_lod' => $data['refills_lod'],
                'refills_date' => date('Y-m-d'),
                'refills_refid' => $refillsid,
               ]
            ];

            $mailData = [
                'title' => 'Mail from ' . $data['refills_name'],
                'refills_name' => $data['refills_name'],
                'refills_pnum' => $data['refills_pnum'],
                'refills_dob' => $data['refills_dob'],
                'refills_rxnum' => $data['refills_rxnum'],
                'refills_mod' => $data['refills_mod'],
                'refills_lod' => $data['refills_lod'],
            ];

            $pdf = PDF::loadView('pdf/refillpdf', [
                'name' => $data['refills_name'],
                'pnum' => $data['refills_pnum'],
                'dob' => $data['refills_dob'],
                'rxnum' => $data['refills_rxnum'],
                'mod' => $data['refills_mod'],
                'lod' => $data['refills_lod'],
                // ... and more data if you like
            ]);
        
            //return $pdf->download('refill.pdf');
            $pdf->save('admin/docs/refill.pdf');

            // Send Fax
           /* SignalWire::sendFax('http://localhost/projects/tkspharmacy/admin/docs/refill.pdf', 
            '+17205830326', '+12015027572', 'standard');*/
            
            $client = new Client('151c9b92-06c7-4e52-b3cf-c720dae2f209', 
            'PT2cf2f36bca3c6adf7e63871df720774bbdcece6c846d8378', 
            array("signalwireSpaceUrl" => "tksrx.signalwire.com"));



        

        if(Refill::where('refills_id', $refillsid )->exists()) {
                return redirect('refill')->with('error_message', 'Something went wrong. Please try again');
            } else {
                //if(Mail::to('adefolarin2017@gmail.com')->send(new RefillMail($mailData))) {
                $fax = $client->fax->v1->faxes
                                   ->create("+17205830326", // to
                                    "https://tksrx.com/admin/docs/refill.pdf", // mediaUrl
                                    array("from" => "+12015101145")
                                 );
                Refill::insert($store);
                return redirect('refill')->with('success_message', $message);
              // }
         }

            

      }
    }


  

}

