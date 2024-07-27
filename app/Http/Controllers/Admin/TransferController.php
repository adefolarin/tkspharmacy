<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
//use App\Models\Transfer;
use Intervention\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\TransferMail;
use Barryvdh\DomPDF\Facade\Pdf;
use HalilCosdu\SignalWire\Facades\SignalWire;

class TransferController extends Controller
{ 
    //
    public function index() {
     //echo "<prev>"; print_r(Auth::guard('admin')->user()); die;
     //return view('admin.login');

    }


    /********************************
       FAX API
    ****************************** */


    public function sendTransfer(Request $request)
    {
        //$transfer = new Transfer;
    
        $message = "You have successfully transfered the patient";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;


                $rules = [
                    'transfers_name' => 'required',
                    'transfers_pnum' => 'required',
                    'transfers_dob' => 'required',
                    'transfers_rxnum' => 'required',
                ];
                $customMessages = [
                    'transfers_name.required' => 'Name of Patient is required',
                    'transfers_pnum.required' => 'Phone Number is required',
                    'transfers_dob.required' => 'Date of Birth is required',
                    'transfers_rxnum.required' => 'RX number is required',
                ];
                     

            $this->validate($request,$rules,$customMessages);

             $store = [
                [
                'transfers_name' => $data['transfers_name'],
                'transfers_pnum' => $data['transfers_pnum'],
                'transfers_dob' => $data['transfers_dob'],
                'transfers_rxnum' => $data['transfers_rxnum'],
               ]
            ];

            $mailData = [
                'title' => 'Mail from ' . $data['transfers_name'],
                'transfers_name' => $data['transfers_name'],
                'transfers_pnum' => $data['transfers_pnum'],
                'transfers_dob' => $data['transfers_dob'],
                'transfers_rxnum' => $data['transfers_rxnum'],
            ];

            $pdf = PDF::loadView('pdf/transferpdf', [
                'name' => $data['transfers_name'],
                'pnum' => $data['transfers_pnum'],
                'dob' => $data['transfers_dob'],
                'rxnum' => $data['transfers_rxnum'],
                // ... and more data if you like
            ]);
        
            //return $pdf->download('transfer.pdf');
            $pdf->save('admin/docs/transfer.pdf');

            // Send Fax
            SignalWire::sendFax('http://localhost/projects/tkspharmacy/admin/docs/transfer.pdf', 
            '+17205830326', '+12015027572', 'standard');



        if(Mail::to('adefolarin2017@gmail.com')->send(new TransferMail($mailData))) {
            Transfer::insert($store);
            return redirect('transfer')->with('success_message', $message);
        }

            

      }
    }


  

}

