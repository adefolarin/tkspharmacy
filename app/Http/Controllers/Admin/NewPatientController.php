<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
//use App\Models\NewPatient;
use Intervention\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\NewPatientMail;
use Barryvdh\DomPDF\Facade\Pdf;
use HalilCosdu\SignalWire\Facades\SignalWire;

class NewPatientController extends Controller
{ 
    //
    public function index() {
     //echo "<prev>"; print_r(Auth::guard('admin')->user()); die;
     //return view('admin.login');

    }


    /********************************
       FAX API
    ****************************** */


    public function sendNewPatient(Request $request)
    {
        //$newpatient = new NewPatient;
    
        $message = "You have successfully registered the new patient";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;


                $rules = [
                    'newpatients_name' => 'required',
                    'newpatients_pnum' => 'required',
                    'newpatients_dob' => 'required',
                    'newpatients_rxnum' => 'required',
                ];
                $customMessages = [
                    'newpatients_name.required' => 'Name of Patient is required',
                    'newpatients_pnum.required' => 'Phone Number is required',
                    'newpatients_dob.required' => 'Date of Birth is required',
                    'newpatients_rxnum.required' => 'RX number is required',
                ];
                     

            $this->validate($request,$rules,$customMessages);

             /* $store = [
                [
                'newpatients_name' => $data['newpatients_name'],
                'newpatients_pnum' => $data['newpatients_pnum'],
                'newpatients_dob' => $data['newpatients_dob'],
                'newpatients_rxnum' => $data['newpatients_rxnum'],
               ]
            ];*/

            /*$mailData = [
                'title' => 'Mail from ' . $data['newpatients_name'],
                'newpatients_name' => $data['newpatients_name'],
                'newpatients_pnum' => $data['newpatients_pnum'],
                'newpatients_dob' => $data['newpatients_dob'],
                'newpatients_rxnum' => $data['newpatients_rxnum'],
            ];*/

            $pdf = PDF::loadView('pdf/newpatientpdf', [
                'name' => $data['newpatients_name'],
                'pnum' => $data['newpatients_pnum'],
                'dob' => $data['newpatients_dob'],
                'rxnum' => $data['newpatients_rxnum'],
                // ... and more data if you like
            ]);
        
            //return $pdf->download('newpatient.pdf');
            $pdf->save('admin/docs/newpatient.pdf');

            // Send Fax
            SignalWire::sendFax('http://localhost/projects/tkspharmacy/admin/docs/newpatient.pdf', 
            '+17205830326', '+12015027572', 'standard');



        //if (Mail::to('adefolarin2017@gmail.com')->send(new NewPatientMail($mailData))) {
            //NewPatient::insert($store);
            return redirect('newpatient')->with('success_message', $message);
        //}

            

      }
    }


  

}

