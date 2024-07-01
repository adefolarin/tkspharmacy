<?php

namespace App\Http\Controllers\FrontEndApi;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\CampaignGallery;
use App\Models\CampaignCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CampaignController extends Controller
{
            /**
     * Display a listing of the resource.
     */
    public function index($campaignsid = null)
    {

        //$campaigncategories = CampaignCategory::query()->get();

        //$campaigns = Campaign::get();

        $now = date("Y-m-d H:i");

        $campaignsnumrw = DB::table('campaigncategories')->orderBy('campaigns_startdate')->join('campaigns','campaigncategories.campaigncategories_id','=', 'campaigns.campaigncategoriesid')->select('campaigns.*','campaigncategories.campaigncategories_name')->where("campaigns_enddate", ">", $now)->count();

        if($campaignsid == null) {
           
          if($campaignsnumrw > 0) {
              $campaigns = DB::table('campaigncategories')->orderBy('campaigns_startdate')->limit(3)->join('campaigns','campaigncategories.campaigncategories_id','=', 'campaigns.campaigncategoriesid')->select('campaigns.*','campaigncategories.campaigncategories_name')->where("campaigns_enddate", ">", $now)->get();

               foreach($campaigns as $campaign) {
               
                if($campaign->campaigns_startdate <= $now && $campaign->campaigns_enddate > $now) {
                    $campaigns_status = true;
                } else {
                    $campaigns_status = false;
                }

                $data [] = array(
                'campaigns_id' => $campaign->campaigns_id,
                'campaigns_title' => $campaign->campaigns_title,
                'campaigns_file' => $campaign->campaigns_file,
                'campaigns_startdatemonth' => date("M j", strtotime($campaign->campaigns_startdate)),
                'campaigns_starttime' => date("g:i a", strtotime($campaign->campaigns_startdate)),
                'campaigns_startdate' => $campaign->campaigns_startdate,
                'campaigns_enddate' => $campaign->campaigns_enddate,
                'campaigns_startfulldate' => date("F j,Y", strtotime($campaign->campaigns_startdate)),
                'campaigns_endfulldate' => date("F j,Y", strtotime($campaign->campaigns_enddate)),
                'datenow' => date("Y-m-d H:i"),
                'campaigns_status' => $campaigns_status,
                );
            }
          } else {
            $data [] = array(
                'campaigns_title' => ''
            );
          }
              
            return response()->json(['campaigns'=>$data]);

        } else {

            
            $campaign = new Campaign;
            //$campaigncategory = new CampaignCategory;
            $campaignonenumrw = $campaign->where('campaigns_id', $campaignsid)->count();

            if($campaignonenumrw > 0) {
              $campaignone = $campaign->where('campaigns_id', $campaignsid)->first();
              $campaign_startdatemonth =  date("M j, Y", strtotime($campaignone->campaigns_startdate));
              $campaign_enddatemonth =  date("M j, Y", strtotime($campaignone->campaigns_enddate));
              $campaign_starttime =  date("g:i a", strtotime($campaignone->campaigns_startdate));

              $data = array(
                'campaigns_id' => $campaignone->campaigns_id,
                'campaigns_title' => $campaignone->campaigns_title,
                'campaigns_desc' => $campaignone->campaigns_desc,
                'campaigns_file' => $campaignone->campaigns_file,
                'campaigns_address' => $campaignone->campaigns_address,
                'campaigns_venue' => $campaignone->campaigns_venue,
                'campaigns_organizer' => $campaignone->campaigns_organizer,
                'campaigns_startdate' => $campaign_startdatemonth,
                'campaigns_enddate' => $campaign_enddatemonth,
                'campaigns_starttime' => $campaign_starttime,
                'campaigns_startfulldate' => date("F j,Y", strtotime($campaignone->campaigns_startdate)),
                'campaigns_endfulldate' => date("F j,Y", strtotime($campaignone->campaigns_enddate)),
            );
            } else {
              $data = array(
                 'campaigns_title' => ''
              );
            }
        

            //$campaigngallerynumrw = \App\Models\CampaignCategory::count();
            $campaigngallerynumrw = DB::table('campaigngalleries')->where("campaignsid", $campaignsid)->orderBy("campaignsid")->count();

            if($campaigngallerynumrw > 0) {
            $campaigngalleries = DB::table('campaigngalleries')->where("campaignsid", $campaignsid)->orderBy("campaignsid")->get();

            foreach($campaigngalleries as $campaigngallery) {
                $gallerydata [] = array(
                'campaignsid' => $campaigngallery->campaignsid,
                'campaigngalleries_file' => $campaigngallery->campaigngalleries_file,
                );
            }
           } else {
               $gallerydata [] = array(
                  'campaigngalleries_file' => ''
               );
           }
            return response()->json(['campaignone'=>$data, 'campaigngallery'=>$gallerydata]);

            
             
        }


    }

    public function getAllCampaign()
    {

        //$campaigncategories = CampaignCategory::query()->get();

        //$campaigns = Campaign::get();

        $now = date("Y-m-d H:i");

        $campaignsnumrw = DB::table('campaigncategories')->orderBy('campaigns_startdate')->join('campaigns','campaigncategories.campaigncategories_id','=', 'campaigns.campaigncategoriesid')->select('campaigns.*','campaigncategories.campaigncategories_name')->where("campaigns_enddate", ">", $now)->count();
           
          if($campaignsnumrw > 0) {
              $campaigns = DB::table('campaigncategories')->orderBy('campaigns_startdate')->join('campaigns','campaigncategories.campaigncategories_id','=', 'campaigns.campaigncategoriesid')->select('campaigns.*','campaigncategories.campaigncategories_name')->where("campaigns_enddate", ">", $now)->get();

               foreach($campaigns as $campaign) {
               
                if($campaign->campaigns_startdate <= $now && $campaign->campaigns_enddate > $now) {
                    $campaigns_status = true;
                } else {
                    $campaigns_status = false;
                }

                $data [] = array(
                'campaigns_id' => $campaign->campaigns_id,
                'campaigns_title' => $campaign->campaigns_title,
                'campaigns_file' => $campaign->campaigns_file,
                'campaigns_startdatemonth' => date("M j", strtotime($campaign->campaigns_startdate)),
                'campaigns_starttime' => date("g:i a", strtotime($campaign->campaigns_startdate)),
                'campaigns_startdate' => $campaign->campaigns_startdate,
                'campaigns_enddate' => $campaign->campaigns_enddate,
                'campaigns_startfulldate' => date("F j,Y", strtotime($campaign->campaigns_startdate)),
                'campaigns_endfulldate' => date("F j,Y", strtotime($campaign->campaigns_enddate)),
                'datenow' => date("Y-m-d H:i"),
                'campaigns_status' => $campaigns_status,
                );
            }
          } else {
            $data [] = array(
                'campaigns_title' => ''
            );
          }
              
            return response()->json(['campaigns'=>$data]);

    


    }

    public function getNextCampaign() {
        $now = date("Y-m-d: h:i");

        $campaignnumrw = DB::table('campaigns')
        ->where("campaigns_startdate", ">", $now)
        ->orderBy("campaigns_startdate")
        ->limit(1)->count();

        if($campaignnumrw > 0) {
        $campaign = DB::table('campaigns')->where("campaigns_startdate", ">", $now)
        ->orderBy("campaigns_startdate")
        ->limit(1)->get();

        //date("F j, Y, g:i a", strtotime($page['created_at']))
        foreach($campaign as $campaign) {

            $campaign_startdatemonth =  date("M j", strtotime($campaign->campaigns_startdate));
            $campaign_starttime =  date("g:i a", strtotime($campaign->campaigns_startdate));

            $campaign_countdown = strtotime($campaign->campaigns_startdate);
            $data [] = array(
                'campaigns_id' => $campaign->campaigns_id,
                'campaigns_title' => $campaign->campaigns_title,
                'campaigns_startdatemonth' => $campaign_startdatemonth,
                'campaigns_starttime' => $campaign_starttime,
                'campaigns_countdown' => $campaign_countdown
            );

        }
        } else {
            $data [] = array(
                'campaigns_title' => ''
            );
        }

        //dd($campaign); die;
        //echo "<prev>"; print_r($data); die;

        return response()->json(['campaign'=>$data]);

        //return $campaign;
    }


    public function getCampaignCat()
    {

        //$campaigncategories = CampaignCategory::query()->get();

        //$campaigns = Campaign::get();

        $now = date("Y-m-d H:i");

        $campaigncatnumrw = DB::table('campaigncategories')->count();

           
          if($campaigncatnumrw > 0) {
              $campaigncats = DB::table('campaigncategories')->get();

               foreach($campaigncats as $campaigncat) {
            

                $data [] = array(
                'campaigncategories_name' => $campaigncat->campaigncategories_name,
                );
            }
          } else {
            $data [] = array(
                'campaigncategories_name' => ''
            );
          }
              
            return response()->json(['campaigncategories'=>$data]);

  


    }

    public function getCampaignLocation()
    {


        $campaignnumrw = DB::table('campaigns')->count();

           
          if($campaignnumrw > 0) {
              $campaigns = DB::table('campaigns')->select('campaigns_venue')->groupBy('campaigns_venue')->get();

               foreach($campaigns as $campaign) {
            

                $data [] = array(
                'campaigns_venue' => $campaign->campaigns_venue,
                );
            }
          } else {
            $data [] = array(
                'campaigns_venue' => ''
            );
          }
              
            return response()->json(['campaignvenues'=>$data]);

  


    }

    public function getCampaignPreacher()
    {


        $campaignnumrw = DB::table('campaigns')->count();

           
          if($campaignnumrw > 0) {
              $campaigns = DB::table('campaigns')->select('campaigns_preacher')->groupBy('campaigns_preacher')->get();

               foreach($campaigns as $campaign) {
            

                $data [] = array(
                'campaigns_preacher' => $campaign->campaigns_preacher,
                );
            }
          } else {
            $data [] = array(
                'campaigns_preacher' => ''
            );
          }
              
            return response()->json(['campaignpreachers'=>$data]);

  


    }






}
