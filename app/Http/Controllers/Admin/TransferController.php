<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use App\Models\Transfer;
use Intervention\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\TransferMail;
use Barryvdh\DomPDF\Facade\Pdf;
use HalilCosdu\SignalWire\Facades\SignalWire;

require './././././vendor/autoload.php';

use SignalWire\Rest\Client;

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
                    'transfers_patname' => 'required',
                    'transfers_patpnum' => 'required',
                    'transfers_patdob' => 'required',
                    'transfers_patemail' => 'required',
                    'transfers_pharmname' => 'required',
                    'transfers_pharmpnum' => 'required',
                    'transfers_note' => 'required',
                ];
                $customMessages = [
                    'transfers_patname.required' => 'Name of Patient is required',
                    'transfers_patpnum.required' => 'Phone Number is required',
                    'transfers_patdob.required' => 'Date of Birth is required',
                    'transfers_patemail.required' => 'Email is required',
                    'transfers_pharmname.required' => 'Name of Pharmacist is required',
                    'transfers_pharmpnum.required' => 'Pharmacist Phone Number is required',
                    'transfers_note.required' => 'Note is required',
                    
                ];
                     

            $this->validate($request,$rules,$customMessages);

            $transfersid = rand(100000000000,999999999999);


            $mailData = [
                'title' => 'Mail from ' . $data['transfers_patname'],
                'transfers_patname' => $data['transfers_patname'],
                'transfers_patpnum' => $data['transfers_patpnum'],
                'transfers_patdob' => $data['transfers_patdob'],
                'transfers_patemail' => $data['transfers_patemail'],
                'transfers_pharmname' => $data['transfers_pharmname'],
                'transfers_pharmpnum' => $data['transfers_pharmpnum'],
                'transfers_note' => $data['transfers_note'],
                'transfers_rxnum' => $data['transfers_rxnum'],
                'transfers_med' => $data['transfers_med'],
            ];

            for ($i=0; $i < 5; $i++) {

            $pdf = PDF::loadView('pdf/transferpdf', [
                'name' => $data['transfers_patname'],
                'pnum' => $data['transfers_patpnum'],
                'dob' => $data['transfers_patdob'],
                'email' => $data['transfers_patemail'],
                'pharmname' => $data['transfers_pharmname'],
                'pharmpnum' => $data['transfers_pharmpnum'],
                'note' => $data['transfers_note'],
                'rxnum' => $data['transfers_rxnum'],
                'med' => $data['transfers_med'],
                
            ]);

            $pdf->save('admin/docs/transfer.pdf');

             $store = [
                [
                'transfers_patname' => $data['transfers_patname'],
                'transfers_patpnum' => $data['transfers_patpnum'],
                'transfers_patdob' => $data['transfers_patdob'],
                'transfers_patemail' => $data['transfers_patemail'],
                'transfers_pharmname' => $data['transfers_pharmname'],
                'transfers_pharmpnum' => $data['transfers_pharmpnum'],
                'transfers_note' => $data['transfers_note'],
                'transfers_rxnum' => $data['transfers_rxnum'][$i],
                'transfers_med' => $data['transfers_med'][$i],
                'transfers_date' => date('Y-m-d'),
                'transfers_refid' =>  $transfersid,
               ]
            ];

            Transfer::insert($store);
           

           }

           //return redirect('transferpatient')->with('success_message', $message);

            $client = new Client('151c9b92-06c7-4e52-b3cf-c720dae2f209', 
            'PT2cf2f36bca3c6adf7e63871df720774bbdcece6c846d8378', 
            array("signalwireSpaceUrl" => "tksrx.signalwire.com"));

          if(Transfer::where('transfers_id', $transfersid )->exists()) {
            return redirect('transfer')->with('error_message', 'Something went wrong. Please try again');
           } else {
            //if(Mail::to('adefolarin2017@gmail.com')->send(new TransferMail($mailData))) {
            $fax = $client->fax->v1->faxes
                                   ->create("+17205830326", // to
                                    "https://tksrx.com/admin/docs/transfer.pdf", // mediaUrl
                                    array("from" => "+12015101145")
                                   );
            Transfer::insert($store);
            return redirect('transferpatient')->with('success_message', $message);
            //}
           }
        
            //return $pdf->download('transfer.pdf');
           

            // Send Fax
           // SignalWire::sendFax('http://localhost/projects/tkspharmacy/admin/docs/transfer.pdf', 
            //'+17205830326', '+12015027572', 'standard');

            



            


            

      }
    }


  

}

