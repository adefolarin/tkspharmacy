<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;
use App\Mail\CommunityMail;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($communitiesid = null)
    {
        Session::put("page", "communities");

        if ($communitiesid == null) {
            $communities = Community::query()->get()->toArray();
            return view('admin.community')->with(compact('communities'));
        } else {
            $communitiesone = Community::find($communitiesid);
            //$banner = Banner::where('banner_id',$bannerid);
            $eventregs = Community::query()->get()->toArray();
            return view('admin.community')->with(compact('communities', 'communitiesone'));
        }


        //dd($CmsPages);

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $message = "You have successfully volunteered";

        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            //dd($data);

            //  Vallidations
            $rules = [
                'communities_name' => 'required',
                'communities_email' => 'required',
                'communities_pnum' => 'required',
                'communities_orgname' => 'required',
                'communities_country' => 'required',
                'communities_state' => 'required',
                'communities_city' => 'required',
                'communities_address' => 'required',
                'communities_outreachdate' => 'required',
                'communities_outreachtime' => 'required',
                'communities_req' => 'required',
                'communities_how' => 'required',
            ];
            $customMessages = [
                'communities_name.required' => 'Name is required',
                'communities_email.required' => 'Email is required',
                'communities_pnum.required' => 'Mailing address is required',
                'communities_orgname.required' => 'Name of Organization is required',
                'communities_country.required' => 'Country is required',
                'communities_state.required' => 'State is required',
                'communities_city.required' => 'City is required',
                'communities_address.required' => 'Address is required',
                'communities_outreachdate.required' => 'Date is required',
                'communities_outreachtime.required' => 'Time is required',
                'communities_req.required' => 'Special requirement or consideration is required',
                'communities_how.required' => 'How you heard about us is required',
            ];

            $this->validate($request, $rules, $customMessages);


            $store = [
                [
                    'communities_name' => $data['communities_name'],
                    'communities_email' => $data['communities_email'],
                    'communities_pnum' => $data['communities_pnum'],
                    'communities_orgname' => $data['communities_orgname'],
                    'communities_country' => $data['communities_country'],
                    'communities_state' => $data['communities_state'],
                    'communities_city' => $data['communities_city'],
                    'communities_address' => $data['communities_address'],
                    'communities_outreachdate' => $data['communities_outreachdate'],
                    'communities_outreachtime' => $data['communities_outreachtime'],
                    'communities_req' => $data['communities_req'],
                    'communities_how' => $data['communities_how'],
                    'communities_date' => date("Y-m-d"),

                ]
            ];

            $mailData = [
                'title' => 'Mail from ' . $data['communities_orgname'],
                'communities_name' => $data['communities_name'],
                    'communities_email' => $data['communities_email'],
                    'communities_pnum' => $data['communities_pnum'],
                    'communities_orgname' => $data['communities_orgname'],
                    'communities_country' => $data['communities_country'],
                    'communities_state' => $data['communities_state'],
                    'communities_city' => $data['communities_city'],
                    'communities_address' => $data['communities_address'],
                    'communities_outreachdate' => $data['communities_outreachdate'],
                    'communities_outreachtime' => $data['communities_outreachtime'],
                    'communities_req' => $data['communities_req'],
                    'communities_how' => $data['communities_how'],
                    'communities_date' => date("Y-m-d"),
                ];


            if (Mail::to('adefolarin2017@gmail.com')->send(new CommunityMail($mailData))) {
                Community::insert($store);
                return redirect('community')->with('success_message', $message);
            }
            //return redirect('admin/event')->with('success_message', $message);


        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($communitiesid)
    {
        Community::where('communities_id', $communitiesid)->delete();
        return redirect('admin/community')->with('success_message', 'Community deleted successfully');
    }


    /************************************
     * FRONT END
     ************************************/

     public function communityFront($communityid = null)
     {
         Session::put("page", "communities");
 
         if($communityid == null) {
           $communities = Community::query()->get()->toArray(); 
           return view('community')->with(compact('communities'));
         } else {
             $contactone = Community::find($communityid);
             //$banner = Banner::where('banner_id',$bannerid);
             $contact = Community::query()->get()->toArray(); 
            return view('community')->with(compact('communities','volunteerone'));
     
         }
 
          
         //dd($CmsPages);
 
     }
}
