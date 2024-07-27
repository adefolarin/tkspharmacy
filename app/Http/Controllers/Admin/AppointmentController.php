<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
//use App\Models\Appointment;
use Intervention\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\AppointmentMail;
use Barryvdh\DomPDF\Facade\Pdf;
use HalilCosdu\SignalWire\Facades\SignalWire;

class AppointmentController extends Controller
{ 
    //
    public function index() {
     //echo "<prev>"; print_r(Auth::guard('admin')->user()); die;
     //return view('admin.login');

    }


    /********************************
       FAX API
    ****************************** */


    public function sendAppointment(Request $request)
    {
        //$appointment = new Appointment;
    
        $message = "You have successfully made an appoinment";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;


                $rules = [
                    'appointments_name' => 'required',
                    'appointments_pnum' => 'required',
                    'appointments_dob' => 'required',
                    'appointments_rxnum' => 'required',
                ];
                $customMessages = [
                    'appointments_name.required' => 'Name of Patient is required',
                    'appointments_pnum.required' => 'Phone Number is required',
                    'appointments_dob.required' => 'Date of Birth is required',
                    'appointments_rxnum.required' => 'RX number is required',
                ];
                     

            $this->validate($request,$rules,$customMessages);

             $store = [
                [
                'appointments_name' => $data['appointments_name'],
                'appointments_pnum' => $data['appointments_pnum'],
                'appointments_dob' => $data['appointments_dob'],
                'appointments_rxnum' => $data['appointments_rxnum'],
               ]
            ];

            $mailData = [
                'title' => 'Mail from ' . $data['appointments_name'],
                'appointments_name' => $data['appointments_name'],
                'appointments_pnum' => $data['appointments_pnum'],
                'appointments_dob' => $data['appointments_dob'],
                'appointments_rxnum' => $data['appointments_rxnum'],
            ];



        if (Mail::to('adefolarin2017@gmail.com')->send(new AppointmentMail($mailData))) {
            Appointment::insert($store);
            return redirect('appointment')->with('success_message', $message);
        }

            

      }
    }


  

}

