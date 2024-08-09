<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use App\Models\NewPatient;
use Intervention\Image;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\NewPatientMail;
use Barryvdh\DomPDF\Facade\Pdf;
use HalilCosdu\SignalWire\Facades\SignalWire;

require './././././vendor/autoload.php';

use SignalWire\Rest\Client;




class TestController extends Controller
{ 
    //
    public function index() {
     //echo "<prev>"; print_r(Auth::guard('admin')->user()); die;
     //return view('admin.login');

    }


    /********************************
       FAX API
    ****************************** */


    public function sendTestFax(Request $request)
    {
        //$newpatient = new NewPatient;
    
        $message = "You have successfully registered the new patient";

        if($request->isMethod('post')) {
            $data = $request->all();


           /* $pdf = PDF::loadView('pdf/newpatientpdf', [
                'name' => $data['newpatients_name'],
                'pnum' => $data['newpatients_pnum'],
                'dob' => $data['newpatients_dob'],
                'rxnum' => $data['newpatients_rxnum'],
            ]);*/
        
            //return $pdf->download('newpatient.pdf');
            //$pdf->save('admin/docs/newpatient.pdf');

            // Send Fax
            /*SignalWire::sendFax('http://localhost/projects/tkspharmacy/admin/docs/newpatient.pdf', 
            '+13032465013', '+12015101145', 'http://localhost/projects/tkspharmacy/testfax', 'standard');*/

            $client = new Client('151c9b92-06c7-4e52-b3cf-c720dae2f209', 'PT2cf2f36bca3c6adf7e63871df720774bbdcece6c846d8378', array("signalwireSpaceUrl" => "tksrx.signalwire.com"));

            $fax = $client->fax->v1->faxes
                                   ->create("+13032465013", // to
                                    "https://tksrx.com/admin/docs/newpatient.pdf", // mediaUrl
                                    array("from" => "+12015101145")
                                   );
            


            return redirect('testfax')->with('success_message', $message);
            

            

      }
    }


  

}

