<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventScheduler;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventSchedulerController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index($eventschedulersid = null)
    {
        Session::put("page", "eventscheduler");
   
         //echo "<prev>"; print_r($events); die;

        if($eventschedulersid == null) {
          $eventschedulers = EventScheduler::query()->get()->toArray(); 
          return view('admin.eventscheduler')->with(compact('eventschedulers'));
        } else {
            $eventschedulerone = EventScheduler::find($eventschedulersid);
            //$banner = Banner::where('banner_id',$bannerid);
            $eventschedulers = EventScheduler::query()->get()->toArray(); 
           return view('admin.eventscheduler')->with(compact('eventschedulers','eventschedulerone'));
    
        }

         
        //dd($CmsPages);

    }

    public static function showEventSchedulersID($eventschedulersid) {

        return DB::table('eventschedulers')->where('eventschedulers_id',$eventschedulersid)->join('events','eventschedulers.eventschedulers_id','=', 'events.eventschedulersid')->select('events.*','eventschedulers.eventschedulers_time')->first();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$title = "Banner";
        $eventscheduler = new EventScheduler;
    
        $message = "Event Scheduler added succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Event Scheduler Vallidations

                $rules = [
                    'eventschedulers_time' => 'required',
                ];
                $customMessages = [
                    'eventschedulers_time.required' => 'Time of Event Scheduler is required',
                ];
                     

            $this->validate($request,$rules,$customMessages);

              $store = [
                [
                'eventschedulers_time' => $data['eventschedulers_time'],
               ]
            ];

              //$eventschedulerone = EventScheduler::find($data['eventschedulers_time']);
              //$eventschedulerone = $eventscheduler->where('eventschedulers_time', '=', $data['eventschedulers_time'])->first();                           
        
               //echo "<prev>"; print_r($eventschedulerone['eventschedulers_time']); die;


              if (EventScheduler::where('eventschedulers_time', $data['eventschedulers_time'])->exists()) {
                return redirect('admin/eventscheduler')->with('error_message', 'Event Scheduler Time Already Exists');
              } else {
                $eventscheduler->insert($store);
                return redirect('admin/eventscheduler')->with('success_message', $message);
              }

          }
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($eventschedulersid)
    {
        //$eventschedulerone = EventScheduler::find($eventschedulersid);
        //$banner = Banner::where('banner_id',$bannerid);
        //return view('admin.eventscheduler')->with(compact('eventschedulerone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $message = "Event Scheduler updated succesfully";

        if($request->isMethod('post')) {
            $data = $request->all();
            //echo "<prev>"; print_r($data); die;

            // Banner Vallidations
                $rules = [
                'eventschedulers_time' => 'required',
                ];
            
            $customMessages = [
                'eventschedulers_time.required' => 'Time of Event Scheduler is required',
            ];

            $this->validate($request,$rules,$customMessages);

              $store = [
            
                'eventschedulers_time' => $data['eventschedulers_time'],
               
            ];

            if (EventScheduler::where('eventschedulers_time', $data['eventschedulers_time'])->exists()) {
                return redirect('admin/eventscheduler/'.$data['eventschedulers_id'])->with('error_message', 'Event Scheduler Time Already Exists');
            }
            else {
              EventScheduler::where('eventschedulers_id',$data['eventschedulers_id'])->update($store);
              return redirect('admin/eventscheduler/'.$data['eventschedulers_id'])->with('success_message', $message);
            }

          }   
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($eventschedulers_id)
    
    {

        EventScheduler::where('eventschedulers_id',$eventschedulers_id)->delete();
        return redirect('admin/eventscheduler')->with('success_message', 'Event Scheduler deleted successfully');
         


    }
}
