<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Mail\DonationMail;
use App\Mail\DonationAdminMail;
use Mail;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class DonationController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index($donationsid = null)
    {
        Session::put("page", "donations");

        if($donationsid == null) {
          $donations = Donation::query()->get()->toArray(); 
          return view('admin.donation')->with(compact('donations'));
        } else {
            $donationsone = Donation::find($donationsid);
            //$banner = Banner::where('banner_id',$bannerid);
            $eventregs = Donation::query()->get()->toArray(); 
           return view('admin.donation')->with(compact('donations','donationsone'));
    
        }

         
        //dd($CmsPages);

    }


    public function sponsorPayment($donationemail)
    {
        Session::put("page", "donations");

          $donations = Donation::query()->where('donations_email', $donationemail)->get()->toArray(); 
          return view('sponsorpayment')->with(compact('donations'));
         
        //dd($CmsPages);

    }


    public function donationFront()
    {
        Session::put("page", "donations");

          return view('donation');
        //dd($CmsPages);

    }

    public function paypal(Request $request) {

      if($request->isMethod('post')) {
        $formdata = $request->all();

        $rules = [
          'donations_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
          'donations_email' => 'required',
          'donations_amount' => 'required',
        ];

        $customMessages = [
          'donations_name.required' => 'Name is required',
          'donations_name.regex' => 'Name is not valid',
          'donations_email.required' => 'Email is not valid',
          'donations_amount.required' => 'Amount is required',

        ];

        $this->validate($request,$rules,$customMessages);

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypaltoken = $provider->getAccessToken();

        $data = [
          "intent" => "CAPTURE",
          "application_context" => [
            "return_url" => route("donation-success"),
            "cancel_url" => route("donation-cancel")
          ],
          "purchase_units" => [
            [
              "amount" => [
                "currency_code" => "USD",
                "value" => $formdata['donations_amount']
            ]
            ]
          ]
        ];
      
        $response = $provider->createOrder($data);
        //dd($response);
        if(isset($response['id']) && $response['id'] != null) {
           foreach($response['links'] as $link) {
              if($link['rel'] === 'approve') {
                session()->put('donations_itemname', $formdata['donations_itemname']);
                session()->put('donations_name', $formdata['donations_name']);
                session()->put('donations_email', $formdata['donations_email']);
                session()->put('donations_type', $formdata['donations_type']);
                session()->put('donations_amount', $formdata['donations_amount']);
                session()->put('donations_pnum', $formdata['donations_pnum']);
                return redirect()->away($link['href']);
              }
           }
        } else {
          // return redirect()->route('donation-cancel');
          return redirect('donation')->with('error_message','Payment is cancelled');
        }
    }

    }

    public function success(Request $request) {
      $provider = new PayPalClient;
      $provider->setApiCredentials(config('paypal'));
      $paypaltoken = $provider->getAccessToken();
      $response = $provider->capturePaymentOrder($request->token);

      if(isset($response['status']) && $response['status'] == 'COMPLETED') {

         $donation = new Donation;
         $donation->donations_name = session()->get('donations_name');
         $donation->donations_email = session()->get('donations_email');
         $donation->donations_pnum = session()->get('donations_pnum');
         //$donation->donations_itemname = session()->get('donations_itemname');
         $donation->donations_amount = $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'];
         $donation->donations_type = session()->get('donations_type');
         $donation->donations_reference = $response['id'];
         $donation->donations_status = $response['status'];
         $donation->donations_date = date("Y-m-d");
         $donation->save();

         $mailData = [
          'title' => 'Donation Received',
          'body' => 'Thank you for your donation. This will be used for your tax filling.',
        ];

        $mailData2 = [
          'title' => 'Donation Alert',
          'body' => $donation->donations_name . ' has made a donation',
        ];

        
          Mail::to($donation->donations_email)->send(new DonationMail($mailData));
          Mail::to('info@shalomglobalmedicalmission.org')->send(new DonationAdminMail($mailData2));

          return redirect('donation')->with('success_message','Payment is succesfull');


            

          //return redirect()->back()->with('success_message','Payment is succesfull');
        
          //return "Payment is succesfull";

          unset($_SESSION['dontions_itemname']);
          unset($_SESSION['dontions_name']);
          unset($_SESSION['dontions_email']);
          unset($_SESSION['dontions_pnum']);
          unset($_SESSION['dontions_type']);
          unset($_SESSION['dontions_amount']);


  
      } else {
          //return redirect()->route('donation-cancel');
          return redirect('donation')->with('error_message','Payment is cancelled');

      }
    }

    public function cancel() {

        //return redirect('/donationcancel')->with('success_message','Payment is succesfull');
        //return redirect()->back()->with('error_message', 'Payment is cancelled');
        return redirect('donation')->with('error_message','Payment is cancelled');
        //return "Payment is cancelled";
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($donationsid)
    {
        Donation::where('donations_id',$donationsid)->delete();
        return redirect('admin/donation')->with('success_message', 'Donation deleted successfully');
    }
}
