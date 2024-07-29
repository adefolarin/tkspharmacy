<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use App\Models\Appointment;
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





    public function AppointmentSuccess() {
        return view('appointmentsuccess');
    }

    public function sendAppointment(Request $request)
    {
        //$appointment = new Appointment;
    
        $message = "You have successfully made an appoinment";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;


                $rules = [
                    'appointments_name' => 'required',
                    'appointments_email' => 'required',
                    'appointments_date' => 'required',
                    'appointments_service' => 'required',
                ];
                $customMessages = [
                    'appointments_name.required' => 'Name of Patient is required',
                    'appointments_email.required' => 'Email is required',
                    'appointments_date.required' => 'Date is required',
                    'appointments_service.required' => 'Select a service',
                ];
                     

            $this->validate($request,$rules,$customMessages);

             $store = [
                [
                'appointments_name' => $data['appointments_name'],
                'appointments_email' => $data['appointments_email'],
                'appointments_date' => $data['appointments_date'],
                'appointments_service' => $data['appointments_service'],
                'appointments_date2' => date('Y-m-d'),
               ]
            ];

            $mailData = [
                'title' => 'Mail from ' . $data['appointments_name'],
                'appointments_name' => $data['appointments_name'],
                'appointments_email' => $data['appointments_email'],
                'appointments_date' => $data['appointments_date'],
                'appointments_service' => $data['appointments_service'],
            ];



        if (Mail::to('adefolarin2017@gmail.com')->send(new AppointmentMail($mailData))) {
            Appointment::insert($store);
            return redirect('appointmentsuccess')->with('success_message', $message);
        }

            

      }
    }


  

}

