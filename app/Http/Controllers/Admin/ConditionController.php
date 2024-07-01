<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Condition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\ConditionMail;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($conditionsid = null)
    {
        Session::put("page", "conditions");

        if ($conditionsid == null) {
            $conditions = Condition::query()->get()->toArray();
            //echo "<prev>"; print_r($conditions); die;
            return view('admin.condition')->with(compact('conditions'));
        } else {
            $conditionsone = Condition::find($conditionsid);
            //$banner = Banner::where('banner_id',$bannerid);
            $eventregs = Condition::query()->get()->toArray();
            return view('admin.condition')->with(compact('conditions', 'conditionsone'));
        }


        //dd($CmsPages);

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $message = "You have successfully reported a condition";

        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            //dd($data);

            //  Vallidations
            $rules = [
                'conditions_name' => 'required',
                'conditions_email' => 'required',
                'conditions_pnum' => 'required',
                'conditions_address' => 'required',
                'conditions_type' => 'required',
                'conditions_desc' => 'required',
                'conditions_treatment' => 'required',
                'conditions_treatmentcost' => 'required',
                //'conditions_fundreason' => 'required',
                //'conditions_fundgoal' => 'required',
                //'conditions_funddeadline' => 'required',
                //'conditions_meddoc' => 'required',
                //'conditions_findoc' => 'required',
                'conditions_meddoc' => 'max:50240',
                'conditions_findoc' => 'max:50240',
                'conditions_consent' => 'required',
            ];
            $customMessages = [
                'conditions_name.required' => 'Name is required',
                'conditions_email.required' => 'Email is required',
                'conditions_pnum.required' => 'Mailing address is required',
                'conditions_address.required' => 'Email is required',
                'conditions_type.required' => 'Select Medical Condition',
                'conditions_treatment.required' => 'Select the type of treatment',
                'conditions_treatmentcost.required' => 'Cost of treatemt is required',
                //'conditions_fundreason.required' => 'Reason for fundraising is required',
                //'conditions_fundgoal.required' => 'Goal for fundraising is required',
                //'conditions_funddeadline.required' => 'What is the deadline for the fundraising?',
                //'conditions_meddoc.required' => 'Upload a medical report',
                //'conditions_findoc.required' => 'Upload a financial documemt',
                'conditions_meddoc.max' => "Upload size can't exceed 50MB",
                'conditions_findoc.max' => "Upload size can't exceed 50MB",
                'conditions_consent.required' => 'Your consent is required',
            ];

            $this->validate($request, $rules, $customMessages);


            if($request->hasFile('conditions_meddoc') && !empty($request->file('conditions_meddoc'))) {

                $docFile = $request->file('conditions_meddoc');
                $fileName = time() . '.' . $docFile->getClientOriginalExtension();
                // Move the uploaded file to the storage directory
                //$videoFile->storeAs('public/admin/videos/banners', $fileName);
                $docFile->storeAs('public/admin/docs/conditions', $fileName);
                //$videoFile->store()
            } else {
                $fileName = "";
            }

            if($request->hasFile('conditions_findoc') && !empty($request->file('conditions_findoc'))) {

                $docFile2 = $request->file('conditions_findoc');
                $fileName2 = time() . '.' . $docFile2->getClientOriginalExtension();
                // Move the uploaded file to the storage directory
                //$videoFile->storeAs('public/admin/videos/banners', $fileName);
                $docFile2->storeAs('public/admin/docs/conditions', $fileName2);
                //$videoFile->store()
            } else {
                $fileName2 = "";
            }
    


            $store = [
                [
                    'conditions_name' => $data['conditions_name'],
                    'conditions_email' => $data['conditions_email'],
                    'conditions_pnum' => $data['conditions_pnum'],
                    'conditions_address' => $data['conditions_address'],
                    'conditions_type' => $data['conditions_type'],
                    'conditions_desc' => $data['conditions_desc'],
                    'conditions_treatment' => $data['conditions_treatment'],
                    'conditions_treatmentcost' => $data['conditions_treatmentcost'],
                    'conditions_fundreason' => $data['conditions_fundreason'],
                    'conditions_fundgoal' => $data['conditions_fundgoal'],
                    'conditions_funddeadline' => $data['conditions_funddeadline'],
                    'conditions_meddoc' => $fileName,
                    'conditions_findoc' => $fileName2,
                    'conditions_consent' => $data['conditions_consent'],
                    'conditions_date' => date("Y-m-d"),

                ]
            ];

            $mailData = [
                    'title' => 'Mail from ' . $data['conditions_name'],
                    'conditions_name' => $data['conditions_name'],
                    'conditions_email' => $data['conditions_email'],
                    'conditions_pnum' => $data['conditions_pnum'],
                    'conditions_address' => $data['conditions_address'],
                    'conditions_type' => $data['conditions_type'],
                    'conditions_desc' => $data['conditions_desc'],
                    'conditions_treatment' => $data['conditions_treatment'],
                    'conditions_treatmentcost' => $data['conditions_treatmentcost'],
                    'conditions_fundreason' => $data['conditions_fundreason'],
                    'conditions_fundgoal' => $data['conditions_fundgoal'],
                    'conditions_funddeadline' => $data['conditions_funddeadline'],
                    'conditions_consent' => $data['conditions_consent'],
                    'conditions_date' => date("Y-m-d"),
            ];


            if (Mail::to('adefolarin2017@gmail.com')->send(new ConditionMail($mailData))) {
                Condition::insert($store);
                return redirect('condition')->with('success_message', $message);
            }
            //return redirect('admin/event')->with('success_message', $message);


        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($conditionsid)
    {
        Condition::where('conditions_id', $conditionsid)->delete();
        return redirect('admin/condition')->with('success_message', 'Condition deleted successfully');
    }


    /************************************
     * FRONT END
     ************************************/

     public function conditionFront($conditionid = null)
     {
         Session::put("page", "conditions");
 
         if($conditionid == null) {
           $conditions = Condition::query()->get()->toArray(); 
           return view('condition')->with(compact('conditions'));
         } else {
             $contactone = Condition::find($conditionid);
             //$banner = Banner::where('banner_id',$bannerid);
             $contact = Condition::query()->get()->toArray(); 
            return view('condition')->with(compact('conditions','conditionone'));
     
         }
 
          
         //dd($CmsPages);
 
     }
}
